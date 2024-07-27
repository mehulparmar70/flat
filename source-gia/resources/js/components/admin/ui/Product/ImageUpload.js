import React, { Component, useState, useContext, useEffect } from 'react'
import MediaContext from '../MultipleImg/MediaContext';
import ProgressBar from 'react-bootstrap/ProgressBar'
import DeleteButton from '../MultipleImg/DeleteButton';
import JqueryComponent from './JqueryComponent';

const GLOBAL = require('../../../../Global');

import $ from "jquery";


const ImageUpload = (props) => {
    // const [name, setName] = useContext(MediaContext);

    const [imageAlt, setImageAlt] = React.useState('');
    const [imageTitle, setImageTitle] = React.useState('');

    const { medias, setMedias, uploadMultipleFiles,
        isLoadding, chooseBtn, fileArrayDesp, uploadFiles,productFileUpload, productFileSave,
        submitBtn, setSubmitBtn, deleteMedia, getProductImages, productImageArray, updateProductImage,
        updateImageData,
         progress, setProgress } = useContext(MediaContext);

    let isLoaddingTab, isLoadingSpinner;
    if (isLoadding == 'disabled') {
        isLoaddingTab = "d-block";
        isLoadingSpinner = "";
    } else {
        isLoaddingTab = "d-none";
        isLoadingSpinner = <div><span className="mr-4">Loading...</span> <div className="spinner-grow" style={{ width: '1rem', height: '1rem' }} role="status">
        </div></div>;
    }

    const now = progress;


    let progressInstance;
    if(progress == 0) {
    }else{
        progressInstance = <ProgressBar className="col-lg-6 col-sm-6 float-right" now={now} label={`${now}%`} />;
        if(progress == 100){
            
              setTimeout(function(){      
                progressInstance = <ProgressBar className="col-lg-6 col-sm-6 float-right" now={now} label={`${now}%`} />;
                setProgress(0);
                console.log('completed 100');
            }, 2000);
        }
    }
    
const editProductImage = (e) => {
    // alert('edit clicked');

        // $(this).toggleClass("editmode");

        $(this).addClass("editmode");
          if($(this).not("editmode")){
            $(this).addClass("editmode");
            alert("Is in editmode")
          } else{
            $(this).removeClass("editmode");
            alert("is not in editmode"+$(this).val(JSON.stringify(e.target)));
            // $('body').hide();
         }

}

const onImageAltChange = (e) =>{
    setImageAlt(e.target.value);
}
const onImageTitleChange = (e) =>{
    setImageTitle(e.target.value);
}



async function updateProductImage1(e) {
    e.preventDefault();
    
    // alert('hii'+e.target.image_alt.value);
    const formData = new FormData();
    formData.append('id', e.target.id.value);
    formData.append('image_alt', e.target.image_alt.value);
    formData.append('image_title', e.target.image_title.value);
  
    axios.post(GLOBAL.API + 'media/update-product-image', formData)
    .then(res => {
        console.log('done');  
    })
  }

    const selectImage = (e)=>{    
        var imgFileXs = event.target.attributes.getNamedItem('src').value;
        var imgFile = imgFileXs.replace('xs','md');
          
        var e = $('#compose-textarea');
        e.summernote();
        e.summernote('focus');
        e.summernote('insertImage', imgFile ,imgFile);

    }   


    

useEffect(() =>{
  

  },[]);


  

    return (
        <>

            <div className="modal-body media-modal-body" id="media-body">
                <div className="col-md-12">

                    <div className="card card-primary card-outline">
                        <div className="card-header">
                            <h3 className="card-title float-left">
                                <i className="fas fa-edit"></i>
                                Media Panel (Add Multiple Images)
                                
                              </h3>
                                    {progressInstance}
                        </div>
                        <div className="card-body">
                            <div className="row">
                                <div className="col-12 col-sm-12">

                                    <div className="tab-content" id="vert-tabs-tabContent">
                                        <div className="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                            <div id="media-upload-tab">
                                                <div className="col-md-12 mb-4">
                                                    
                                                        {isLoadingSpinner}

                                                        <form id="productImageForm" className="form" onSubmit={productFileSave} >
                                                        <div className="row">
                                                                <div className="col-3">
                                                                    <div className="form-group multi-preview">
                                                                        {(fileArrayDesp || []).map(url => (
                                                                            <img src={url} key={url} alt="..." style={{ width: '40px', marginRight: '20px' }} />
                                                                        ))}
                                                                    </div>
                                                                    <input type="file" className={"chooseBtn"}
                                                                        onChange={(e) => productFileUpload(e)} required/>
                                                                </div>

                                                                <div className="col">
                                                                    <textarea type="text" placeholder="Image Alt Text" className={"float-right form-control image_alt"}></textarea>
                                                                </div>
                                                                <div className="col">
                                                                    <textarea type="text" placeholder="Image Title Text" className={"float-right form-control image_title"}></textarea>
                                                                </div>
                                                                <div className="col-2">
                                                                    <button className="btn btn-success float-right chooseBtn" style={{ marginTop: 4 }}
                                                                    >
                                                                     Upload Images</button>
                                                                </div>
                                                        </div>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div className="row">
                                            <table className="table">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Image</th>
                                                        <th>Alt</th>
                                                        <th>Title</th>
                                                        <th>Action</th>
                                                    </tr>    
                                                </thead>
                        <tbody>
                    {(productImageArray || []).map((productImage, index)=>(
                                                                    
                            <tr key={productImage.id}>
                                <td>{++index}</td>                      
                                <td> <img className="img-thumbnail" key={productImage.image}  width="50"
                                        src={GLOBAL.BASE_URL+'web/media/sm/'+productImage.image} data-holder-rendered="true"/>
                                </td>                   

                                <td colSpan="2">
                                    <div className="col-sm-11 pull-left">
                                        
                                        <form method="POST" className="form" onSubmit={updateImageData}> 
                                            <div className="col-sm-5 pull-left px-1">
                                            <textarea onKeyUp={onImageAltChange} defaultValue={productImage.image_alt} className="form-control image_alt" type="text" name="image_alt"></textarea>
                                            </div>
                                            <div className="col-sm-5 pull-left px-1">

                                            <textarea onKeyUp={onImageTitleChange} defaultValue={productImage.image_title} className="form-control image_title" type="text" name="image_title"></textarea>
                                            
                                        <input type="hidden" name="id" defaultValue={productImage.id}/>
                                            
                                            </div>
                                            <div className="col-sm-2 pull-left px-1">

                                            <button className="btn btn-primary btn-xs m-1">Update Data</button>

                                            </div>
                                        </form>    
                                    </div>

                                    <div className="col-sm-1 pull-left">
                                    <form method="POST" className="form" onSubmit={deleteMedia}> 
                                        <input type="hidden" name="delid" defaultValue={productImage.id}/>
                                            <button className="btn btn-danger btn-xs m-1"><i className="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td> 
                            </tr>
                    ))}
                    </tbody>
                    

                                            </table>
                                        </div>

                                        {/* <div className="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                            <div id="media-display">
                                                <div className="row">
                                                    {
                                                        (medias || []).map(media => (
                                                            <div className="col-md-2 media-card" key={media.id}>
                                                                <div className="card mb-2">
                                                                    <img className="card-img-top w-100 mb-2" data-dismiss="modal" key={media.image}
                                                                        alt="300x200" onClick={(e)=>selectImage()}
                                                                        src={GLOBAL.BASE_URL + 'web/media/xs/' + media.image} data-holder-rendered="true" />
                                                                    <DeleteButton delid={media.id} classProps="btn btn-danger del-modal float-right" />

                                                                    <form method="POST" className="form" onSubmit={deleteMedia}>
                                                                        <div className="">
                                                                            <input type="hidden" name="delid" value={media.id} key={media.id} />
                                                                            <button><i className="fas fa-trash-alt"></i></button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        ))
                                                    }
                                                </div>

                                            </div>
                                        </div> */}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </>
    )

}



export default ImageUpload;
