<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/share-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.shareReport',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nqErMWpgt8d0Bgm0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/get-media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TMSplSl3PKmRcd3S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/media-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mhsz1BflwyNsZfSG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/update-product-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GBS0Lms64lKc8nVI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/update-image-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OaaQ9WgEKWuB96x0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/media/upload-multiple-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.multiple-image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/slider/update-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.update-status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/item/update-item-priority' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.update-priority',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/update-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'status.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/item-bulk-delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item.bulk-delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/send-contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-contact',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/send-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send-enquiry',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test-mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test-mail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-industrial-inflatable-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap.html' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sitemap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/news-letters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::593SFnw1qUMfGoWI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ErvenV37MbBQtDkH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/videos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xoeZxRQpHX8oVsBR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/case-studies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZfCajCTpFS6H71fD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VOl0ekJRMo4CzylP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/awards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZkABOZgGF1UBnJy8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g0v3JvSS1eD5j2iz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/partenrs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HsE7Ikk4YVOuPSG0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XO3X0XSZD989vc3m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/showimg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::34rrAshiclIr7deJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/thankyou' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'thankyou',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/destorySession' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HJiuhUTlNgzphyYZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/getCatogery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KFH40DaoT1sPl5zH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mail1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HhasyGvO8co3gRln',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/register/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.register.save',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/auth/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.auth.check',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.auth.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/auth/logoutOnscreen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.auth.logoutOnscreen',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JQTxjx2YWTJmR0vq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/email-filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-filter.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'email-filter.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/email-filter/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-filter.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/block-control/top-inflatables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topInflatable.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topInflatable.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/block-control/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blockControl.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/block-control/page-links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pageLink.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pageLink.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/block-control/page-links/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.pageLink.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/block-control/common-links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.commonLink.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/custom-code/js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.customJs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.about-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonial-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.video-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/partenrs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partners-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/casestudies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.casestudies-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.client-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/awards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.awards-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/updates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updates-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/industries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.industries-page.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/page-editor/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page-editor.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/admin/close' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.close',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/home-editor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.editor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/industries-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NP50VS6DY5Iu5QYG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/industries-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pAGstN1ePSyZOZSP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/industries-index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::safDDC8qKuztP1nd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/about-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/url-list1/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.url-list1.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/url-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.url.group',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/settings/social-media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.social-media',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.social-media.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/settings/seo-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.seo-manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.seo-manage.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/settings/seo-manage-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.seo-manage-images.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/category/subCategoryStore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.list.subCategoryStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/category/subCategory2Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.list.subCategory2Store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/criteria/meta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.criteria.meta.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.criteria.meta.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/criteria/meta/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.criteria.meta.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/employee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/admin/contactus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/admin/contactus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/client/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/award' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'award.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/award/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/task' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'task.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/task/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/task-assign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task-assign.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'task-assign.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/task-assign/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task-assign.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'product.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonials.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'testimonials.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/testimonials/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonials.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/partners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/partners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/newsletter/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/casestudies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'casestudies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'casestudies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/casestudies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'casestudies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'video.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/video/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/custom-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-code.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custom-code.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/custom-code/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-code.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/criteria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'criteria.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'criteria.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/criteria/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'criteria.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/tinypng' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tinypng',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tinypng.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/media-table-webp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tinypng.mediaTableCovert2Webp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/webp-converter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tinypng.webp-converter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.list.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/dashboard2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.test',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/powerup/photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photo.manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/route-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFpbLSZ8WVKX8yHu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/config-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EDBErGItOQ99OykC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WbA6ukq8lIBS967B',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/view-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6v0Y4jsGmNoUfXtV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YAOLl5VdsR8qC2yz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/all-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LdAb1ZqupEgGv69R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/list-route' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mGw2AHFVOqmBy893',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_ignition/s(?|cripts/([^/]++)(*:37)|tyles/([^/]++)(*:58))|/api/(?|media/(?|get\\-product\\-images/([^/]++)(*:112)|media\\-delete/([^/]++)(?|(*:145))|image\\-delete/([^/]++)(*:176)|update\\-multiple\\-image\\-field/([^/]++)(*:223))|photos/([^/]++)/comments(?|(*:259)|/(?|create(*:277)|([^/]++)(?|(*:296)|/edit(*:309)|(*:317)))|(*:327))|get/get(?|PetaKacheri/([^/]++)(*:366)|Department/([^/]++)(*:393)|Sub(?|Categories(?|/([^/]++)(*:429)|List/([^/]++)(*:450))|categoriesNoProducts/([^/]++)(*:488))))|/blog/([^/]++)(*:513)|/p(?|artners/([^/]++)(*:542)|owerup/(?|slider/([^/]++)(?|(*:578)|/edit(*:591)|(*:599))|em(?|ail\\-filter/([^/]++)(?|(*:636)|/edit(*:649)|(*:657))|ployee/([^/]++)(?|(*:684)|/edit(*:697)|(*:705)))|blo(?|ck\\-control/common\\-links/(?|([^/]++)(*:758)|update(*:772))|g/(?|delete/([^/]++)(*:801)|([^/]++)(?|(*:820)|/edit(*:833)|(*:841))))|t(?|op\\-inflatable/delete/([^/]++)(*:886)|estimonial(?|/delete/([^/]++)(*:923)|s/([^/]++)(?|(*:944)|/edit(*:957)|(*:965)))|ask(?|/([^/]++)(?|(*:993)|/edit(*:1006)|(*:1015))|\\-assign/([^/]++)(?|(*:1045)|/edit(*:1059)|(*:1068)))|rashed/(?|([^/]++)(?|(*:1100)|/([^/]++)(*:1118))|restore/([^/]++)/([^/]++)(*:1153)))|industries(?|\\-(?|edit/([^/]++)(*:1195)|update/([^/]++)(*:1219)|delete/([^/]++)(*:1243))|/delete/([^/]++)(*:1269))|url\\-list1/delete/([^/]++)(*:1305)|c(?|a(?|tegory/(?|delete/([^/]++)(*:1347)|edit/([^/]++)(*:1369)|update/([^/]++)(*:1393))|sestudies/(?|delete/([^/]++)(*:1431)|([^/]++)(?|(*:1451)|/edit(*:1465)|(*:1474))))|riteria/(?|meta/(?|edit/([^/]++)(*:1518)|([^/]++)(*:1535))|([^/]++)(?|(*:1556)|/edit(*:1570)|(*:1579)))|lient/([^/]++)(?|(*:1607)|/edit(*:1621)|(*:1630))|ustom\\-code/([^/]++)(?|(*:1663)|/edit(*:1677)|(*:1686)))|newsletter/(?|delete/([^/]++)(*:1726)|([^/]++)(?|(*:1746)|/edit(*:1760)|(*:1769)))|video/(?|delete/([^/]++)(*:1804)|([^/]++)(?|(*:1824)|/edit(*:1838)|(*:1847)))|a(?|ward/(?|delete/([^/]++)(*:1885)|([^/]++)(?|(*:1905)|/edit(*:1919)|(*:1928)))|dmin/contactus/([^/]++)(?|(*:1965)|/edit(*:1979)|(*:1988)))|p(?|roduct/(?|([^/]++)(?|(*:2024)|/edit(*:2038)|(*:2047))|image(?|(*:2065)|2(*:2075)))|artners/([^/]++)(?|(*:2105)|/edit(*:2119)|(*:2128)))))|/updates/([^/]++)(*:2158)|/news\\-letters/([^/]++)(*:2190)|/case\\-studies/([^/]++)(*:2222)|/([^/]++)(*:2240)|/product/([^/]++)(?|(*:2269)|(*:2278))|/([^/]++)/([^/]++)(?|(*:2309)|/([^/]++)(*:2327))|/search(*:2344))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.scripts',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.styles',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z7LEkRMRjGJascfO',
          ),
          1 => 
          array (
            0 => 'mediaId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xiTOZYKi2BALHVHQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFdiqxHZK1jvES56',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z5RrUYieIhS6bAhk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.multiple-image-field',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.comments.index',
          ),
          1 => 
          array (
            0 => 'photo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.comments.create',
          ),
          1 => 
          array (
            0 => 'photo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.comments.show',
          ),
          1 => 
          array (
            0 => 'photo',
            1 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.comments.edit',
          ),
          1 => 
          array (
            0 => 'photo',
            1 => 'comment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.comments.update',
          ),
          1 => 
          array (
            0 => 'photo',
            1 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'photos.comments.destroy',
          ),
          1 => 
          array (
            0 => 'photo',
            1 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'photos.comments.store',
          ),
          1 => 
          array (
            0 => 'photo',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5X9OqioC43XBXEMo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AhcOoK7Ra0cmHjQn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9YDEuFvUMj7yiVAk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      450 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pRlL7RiiZLZSmeIB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KjvJ9X9UfP0nYyrM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZK9qQJ6E5lDhjHXU',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      542 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nhj2op6tT4W5Sm0h',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.show',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.edit',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'slider.update',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'slider.destroy',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-filter.show',
          ),
          1 => 
          array (
            0 => 'email_filter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-filter.edit',
          ),
          1 => 
          array (
            0 => 'email_filter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      657 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email-filter.update',
          ),
          1 => 
          array (
            0 => 'email_filter',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'email-filter.destroy',
          ),
          1 => 
          array (
            0 => 'email_filter',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.show',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.edit',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employee.update',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employee.destroy',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      758 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.commonLink.create',
          ),
          1 => 
          array (
            0 => 'pageType',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.commonLink.update',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.item.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.show',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.edit',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blog.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.top.inflatable.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonial.item.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonials.show',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonials.edit',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonials.update',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'testimonials.destroy',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task.show',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task.edit',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task.update',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'task.destroy',
          ),
          1 => 
          array (
            0 => 'task',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task-assign.show',
          ),
          1 => 
          array (
            0 => 'task_assign',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task-assign.edit',
          ),
          1 => 
          array (
            0 => 'task_assign',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'task-assign.update',
          ),
          1 => 
          array (
            0 => 'task_assign',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'task-assign.destroy',
          ),
          1 => 
          array (
            0 => 'task_assign',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.trashed',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.trashed.restore',
          ),
          1 => 
          array (
            0 => 'table',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QztqFzrCKJube8yl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RC4w8hupmX7R9s0G',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z8g4JwBz1NBc1X7B',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'industries.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.url-list1.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.list.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.list.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.casestudies.item.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'casestudies.show',
          ),
          1 => 
          array (
            0 => 'casestudy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'casestudies.edit',
          ),
          1 => 
          array (
            0 => 'casestudy',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'casestudies.update',
          ),
          1 => 
          array (
            0 => 'casestudy',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'casestudies.destroy',
          ),
          1 => 
          array (
            0 => 'casestudy',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.criteria.meta.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.criteria.meta.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'criteria.show',
          ),
          1 => 
          array (
            0 => 'criterion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'criteria.edit',
          ),
          1 => 
          array (
            0 => 'criterion',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'criteria.update',
          ),
          1 => 
          array (
            0 => 'criterion',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'criteria.destroy',
          ),
          1 => 
          array (
            0 => 'criterion',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.show',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.edit',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.update',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.destroy',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-code.show',
          ),
          1 => 
          array (
            0 => 'custom_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-code.edit',
          ),
          1 => 
          array (
            0 => 'custom_code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-code.update',
          ),
          1 => 
          array (
            0 => 'custom_code',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custom-code.destroy',
          ),
          1 => 
          array (
            0 => 'custom_code',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1726 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.item.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.show',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.edit',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.update',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.destroy',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.video.item.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1824 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.show',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.edit',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.update',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'video.destroy',
          ),
          1 => 
          array (
            0 => 'video',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.award.item.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1905 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.show',
          ),
          1 => 
          array (
            0 => 'award',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.edit',
          ),
          1 => 
          array (
            0 => 'award',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.update',
          ),
          1 => 
          array (
            0 => 'award',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'award.destroy',
          ),
          1 => 
          array (
            0 => 'award',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.show',
          ),
          1 => 
          array (
            0 => 'contactu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.edit',
          ),
          1 => 
          array (
            0 => 'contactu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.update',
          ),
          1 => 
          array (
            0 => 'contactu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.destroy',
          ),
          1 => 
          array (
            0 => 'contactu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'product.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.productImage',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.productImage2',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.show',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.edit',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partners.update',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partners.destroy',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QqJKLrCqLjNO6wHf',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TmVT12Pj1oR1cbK1',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVjWaVpUJsreARTS',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FKPitsQaCwZAo2Nd',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ORI8KznpVvgdRbGx',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V4EOE0RvBGL9pGDS',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EyFcHsOS33BZpkDy',
          ),
          1 => 
          array (
            0 => 'category',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8HfCwIkumZVqTmd9',
          ),
          1 => 
          array (
            0 => 'category',
            1 => 'subCategory',
            2 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s0bWJUowrnMEgtKY',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableRunnableSolutions',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.shareReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/share-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableShareButton',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController',
        'as' => 'ignition.shareReport',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/scripts/{script}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController',
        'as' => 'ignition.scripts',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/styles/{style}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\StyleController',
        'as' => 'ignition.styles',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nqErMWpgt8d0Bgm0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000073793c29000000007f53c611";}";s:4:"hash";s:44:"e/v21HD/p/4IQgfKCDjsXMLI2Z0hxdLK1fx0Dc+tc7g=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nqErMWpgt8d0Bgm0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TMSplSl3PKmRcd3S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/media/get-media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@index',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TMSplSl3PKmRcd3S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z7LEkRMRjGJascfO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/media/get-product-images/{mediaId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@getProductImages',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@getProductImages',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::z7LEkRMRjGJascfO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mhsz1BflwyNsZfSG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/media-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@mediaStore',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@mediaStore',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mhsz1BflwyNsZfSG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GBS0Lms64lKc8nVI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/update-product-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@updateProductImage',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@updateProductImage',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GBS0Lms64lKc8nVI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xiTOZYKi2BALHVHQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/media-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@mediaDelete',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@mediaDelete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xiTOZYKi2BALHVHQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uFdiqxHZK1jvES56' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/media/media-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@mediaDelete',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@mediaDelete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uFdiqxHZK1jvES56',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z5RrUYieIhS6bAhk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/image-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@imageDelete',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@imageDelete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Z5RrUYieIhS6bAhk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OaaQ9WgEKWuB96x0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/update-image-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\MediaApiController@updateImageData',
        'controller' => 'App\\Http\\Controllers\\api\\MediaApiController@updateImageData',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OaaQ9WgEKWuB96x0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upload.multiple-image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/upload-multiple-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApiCallController@UploadMultipleImage',
        'controller' => 'App\\Http\\Controllers\\api\\ApiCallController@UploadMultipleImage',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'upload.multiple-image',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.multiple-image-field' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/media/update-multiple-image-field/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApiCallController@updateMultipleImageField',
        'controller' => 'App\\Http\\Controllers\\api\\ApiCallController@updateMultipleImageField',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'update.multiple-image-field',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/photos/{photo}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'photos.comments.index',
        'uses' => 'App\\Http\\Controllers\\PhotoController@index',
        'controller' => 'App\\Http\\Controllers\\PhotoController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.comments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/photos/{photo}/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'photos.comments.create',
        'uses' => 'App\\Http\\Controllers\\PhotoController@create',
        'controller' => 'App\\Http\\Controllers\\PhotoController@create',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/photos/{photo}/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'photos.comments.store',
        'uses' => 'App\\Http\\Controllers\\PhotoController@store',
        'controller' => 'App\\Http\\Controllers\\PhotoController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.comments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/photos/{photo}/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'photos.comments.show',
        'uses' => 'App\\Http\\Controllers\\PhotoController@show',
        'controller' => 'App\\Http\\Controllers\\PhotoController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.comments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/photos/{photo}/comments/{comment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'photos.comments.edit',
        'uses' => 'App\\Http\\Controllers\\PhotoController@edit',
        'controller' => 'App\\Http\\Controllers\\PhotoController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.comments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/photos/{photo}/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'photos.comments.update',
        'uses' => 'App\\Http\\Controllers\\PhotoController@update',
        'controller' => 'App\\Http\\Controllers\\PhotoController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'photos.comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/photos/{photo}/comments/{comment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'photos.comments.destroy',
        'uses' => 'App\\Http\\Controllers\\PhotoController@destroy',
        'controller' => 'App\\Http\\Controllers\\PhotoController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5X9OqioC43XBXEMo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get/getPetaKacheri/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CategoryController@getPetaKacheri',
        'controller' => 'App\\Http\\Controllers\\api\\CategoryController@getPetaKacheri',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5X9OqioC43XBXEMo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AhcOoK7Ra0cmHjQn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get/getDepartment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CategoryController@getDepartment',
        'controller' => 'App\\Http\\Controllers\\api\\CategoryController@getDepartment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::AhcOoK7Ra0cmHjQn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9YDEuFvUMj7yiVAk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get/getSubCategories/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CategoryController@getSubCategories',
        'controller' => 'App\\Http\\Controllers\\api\\CategoryController@getSubCategories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9YDEuFvUMj7yiVAk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pRlL7RiiZLZSmeIB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get/getSubCategoriesList/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CategoryController@getSubCategoriesList',
        'controller' => 'App\\Http\\Controllers\\api\\CategoryController@getSubCategoriesList',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pRlL7RiiZLZSmeIB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KjvJ9X9UfP0nYyrM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/get/getSubcategoriesNoProducts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\CategoryController@getSubcategoriesNoProducts',
        'controller' => 'App\\Http\\Controllers\\api\\CategoryController@getSubcategoriesNoProducts',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::KjvJ9X9UfP0nYyrM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.update-status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/slider/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\SliderController@update_list_no',
        'controller' => 'App\\Http\\Controllers\\api\\SliderController@update_list_no',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'slider.update-status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item.update-priority' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item/update-item-priority',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ItemPriorityController@updateItemNo',
        'controller' => 'App\\Http\\Controllers\\api\\ItemPriorityController@updateItemNo',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'item.update-priority',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\StatusController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\api\\StatusController@updateStatus',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'status.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item.bulk-delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/item-bulk-delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ItemPriorityController@ItemBulkDelete',
        'controller' => 'App\\Http\\Controllers\\api\\ItemPriorityController@ItemBulkDelete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'item.bulk-delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/send-contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApiCallController@sendContact',
        'controller' => 'App\\Http\\Controllers\\api\\ApiCallController@sendContact',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'send-contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send-enquiry' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/send-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApiCallController@sendContactEnquiry',
        'controller' => 'App\\Http\\Controllers\\api\\ApiCallController@sendContactEnquiry',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'send-enquiry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'test-mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test-mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\api\\ApiCallController@testMail',
        'controller' => 'App\\Http\\Controllers\\api\\ApiCallController@testMail',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'test-mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@about',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-industrial-inflatable-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@product',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sitemap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap.html',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@sitemap',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@sitemap',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sitemap',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZK9qQJ6E5lDhjHXU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@blog_details',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@blog_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZK9qQJ6E5lDhjHXU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nhj2op6tT4W5Sm0h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partners/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@partners_details',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@partners_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nhj2op6tT4W5Sm0h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QqJKLrCqLjNO6wHf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'updates/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@updates_details',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@updates_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QqJKLrCqLjNO6wHf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::593SFnw1qUMfGoWI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news-letters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@newsletters',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@newsletters',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::593SFnw1qUMfGoWI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TmVT12Pj1oR1cbK1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'news-letters/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@newsletters_details',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@newsletters_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TmVT12Pj1oR1cbK1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ErvenV37MbBQtDkH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@testimonials',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@testimonials',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ErvenV37MbBQtDkH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xoeZxRQpHX8oVsBR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'videos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@videos',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@videos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xoeZxRQpHX8oVsBR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZfCajCTpFS6H71fD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'case-studies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@casestudies',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@casestudies',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZfCajCTpFS6H71fD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yVjWaVpUJsreARTS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'case-studies/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@casestudies_details',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@casestudies_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yVjWaVpUJsreARTS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VOl0ekJRMo4CzylP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@client',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@client',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VOl0ekJRMo4CzylP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZkABOZgGF1UBnJy8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'awards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@awards',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@awards',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZkABOZgGF1UBnJy8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g0v3JvSS1eD5j2iz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'updates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@updates',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@updates',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::g0v3JvSS1eD5j2iz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HsE7Ikk4YVOuPSG0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'partenrs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@partenrs',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@partenrs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HsE7Ikk4YVOuPSG0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XO3X0XSZD989vc3m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@blog',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XO3X0XSZD989vc3m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::34rrAshiclIr7deJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'showimg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@industriesImages',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@industriesImages',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::34rrAshiclIr7deJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@contact',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'thankyou' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'thankyou',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@thankyou',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@thankyou',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'thankyou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HJiuhUTlNgzphyYZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'destorySession',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@destorySession',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@destorySession',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HJiuhUTlNgzphyYZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KFH40DaoT1sPl5zH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'getCatogery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@getCatogery',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@getCatogery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KFH40DaoT1sPl5zH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HhasyGvO8co3gRln' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mail1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:313:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:95:"function () {
    return \\view(\'mail/thankyou-notification\', [\'articleName\' => \'Article 1\']);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007379307d000000007f53c611";}";s:4:"hash";s:44:"PEEqXI3vH3Wqjyi+XqtJQOaXfvLDb6w0kaujZrr/TlE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::HhasyGvO8co3gRln',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.register.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/register/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@save',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@save',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.register.save',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.auth.check' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/auth/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@check',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@check',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.auth.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.auth.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@logout',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@logout',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.auth.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.auth.logoutOnscreen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/auth/logoutOnscreen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@logoutOnscreen',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@logoutOnscreen',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.auth.logoutOnscreen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@login',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@login',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JQTxjx2YWTJmR0vq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AdminAuthController@register',
        'controller' => 'App\\Http\\Controllers\\admin\\AdminAuthController@register',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'generated::JQTxjx2YWTJmR0vq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'slider.index',
        'uses' => 'App\\Http\\Controllers\\admin\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\SliderController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'slider.create',
        'uses' => 'App\\Http\\Controllers\\admin\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\SliderController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'slider.store',
        'uses' => 'App\\Http\\Controllers\\admin\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\SliderController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'slider.show',
        'uses' => 'App\\Http\\Controllers\\admin\\SliderController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\SliderController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/slider/{slider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'slider.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\SliderController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'slider.update',
        'uses' => 'App\\Http\\Controllers\\admin\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\SliderController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'slider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'slider.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\SliderController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-filter.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/email-filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'email-filter.index',
        'uses' => 'App\\Http\\Controllers\\admin\\EmailFilterController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\EmailFilterController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-filter.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/email-filter/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'email-filter.create',
        'uses' => 'App\\Http\\Controllers\\admin\\EmailFilterController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\EmailFilterController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-filter.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/email-filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'email-filter.store',
        'uses' => 'App\\Http\\Controllers\\admin\\EmailFilterController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\EmailFilterController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-filter.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/email-filter/{email_filter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'email-filter.show',
        'uses' => 'App\\Http\\Controllers\\admin\\EmailFilterController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\EmailFilterController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-filter.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/email-filter/{email_filter}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'email-filter.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\EmailFilterController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\EmailFilterController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-filter.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/email-filter/{email_filter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'email-filter.update',
        'uses' => 'App\\Http\\Controllers\\admin\\EmailFilterController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\EmailFilterController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email-filter.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/email-filter/{email_filter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'email-filter.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\EmailFilterController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\EmailFilterController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topInflatable.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/block-control/top-inflatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@topInflatableCreate',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@topInflatableCreate',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.topInflatable.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topInflatable.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/block-control/top-inflatables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@topInflatableStore',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@topInflatableStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.topInflatable.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blockControl.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/block-control/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@deleteBlockControl',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@deleteBlockControl',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.blockControl.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pageLink.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/block-control/page-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@pageLinkCreate',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@pageLinkCreate',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.pageLink.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pageLink.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/block-control/page-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@pageLinkStore',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@pageLinkStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.pageLink.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.pageLink.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/block-control/page-links/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@pageLinkUpdate',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@pageLinkUpdate',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.pageLink.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.commonLink.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/block-control/common-links/{pageType}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@commonLinkCreate',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@commonLinkCreate',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.commonLink.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.commonLink.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/block-control/common-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@commonLinkStore',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@commonLinkStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.commonLink.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.commonLink.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/block-control/common-links/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlockControlController@commonLinkUpdate',
        'controller' => 'App\\Http\\Controllers\\admin\\BlockControlController@commonLinkUpdate',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.commonLink.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.customJs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/custom-code/js',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@customJs',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@customJs',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.customJs.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.top.inflatable.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/top-inflatable/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\HomeEditorController@topInflatableDelete',
        'controller' => 'App\\Http\\Controllers\\admin\\HomeEditorController@topInflatableDelete',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.top.inflatable.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.about-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@aboutPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@aboutPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.about-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@productPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@productPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.product-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonial-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@testimonialPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@testimonialPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.testimonial-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.video-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@videoPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@videoPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.video-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@blogPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@blogPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.blog-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.partners-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/partenrs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@partenrsPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@partenrsPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.partners-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@contactPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@contactPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.contact-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.casestudies-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/casestudies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@casestudiesPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@casestudiesPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.casestudies-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@newsletterPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@newsletterPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.client-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@clientPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@clientPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.client-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.awards-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/awards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@awardsPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@awardsPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.awards-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updates-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/updates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@updatesPageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@updatesPageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.updates-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.industries-page.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/page-editor/industries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@industriePageEditor',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@industriePageEditor',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.industries-page.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page-editor.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/page-editor/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PageController@pageEditorStore',
        'controller' => 'App\\Http\\Controllers\\admin\\PageController@pageEditorStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.page-editor.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.close' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/admin/close',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@close',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@close',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.close',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.editor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/home-editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\HomeEditorController@homeEditorIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\HomeEditorController@homeEditorIndex',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.home.editor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NP50VS6DY5Iu5QYG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/industries-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\IndustriesController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\IndustriesController@create',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'generated::NP50VS6DY5Iu5QYG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pAGstN1ePSyZOZSP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/industries-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\IndustriesController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\IndustriesController@store',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'generated::pAGstN1ePSyZOZSP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::safDDC8qKuztP1nd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/industries-index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\IndustriesController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\IndustriesController@index',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'generated::safDDC8qKuztP1nd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QztqFzrCKJube8yl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/industries-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\IndustriesController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\IndustriesController@edit',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'generated::QztqFzrCKJube8yl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RC4w8hupmX7R9s0G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/industries-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\IndustriesController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\IndustriesController@update',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'generated::RC4w8hupmX7R9s0G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z8g4JwBz1NBc1X7B' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/industries-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\IndustriesController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\IndustriesController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'generated::Z8g4JwBz1NBc1X7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'industries.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/industries/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\IndustriesController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\IndustriesController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'industries.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/about-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\HomeEditorController@homeEditorAboutStore',
        'controller' => 'App\\Http\\Controllers\\admin\\HomeEditorController@homeEditorAboutStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.about.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.url-list1.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/url-list1/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\HomeEditorController@urlListStore1',
        'controller' => 'App\\Http\\Controllers\\admin\\HomeEditorController@urlListStore1',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.url-list1.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.url-list1.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/url-list1/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\HomeEditorController@urlListDelete1',
        'controller' => 'App\\Http\\Controllers\\admin\\HomeEditorController@urlListDelete1',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.url-list1.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.url.group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/url-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\UrlGroupController@UrlGroupIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\UrlGroupController@UrlGroupIndex',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.url.group',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.social-media' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/settings/social-media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@socialMediaIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@socialMediaIndex',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.social-media',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.social-media.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/settings/social-media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@socialMediaStore',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@socialMediaStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.social-media.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.seo-manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/settings/seo-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@seoManageIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@seoManageIndex',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.seo-manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.seo-manage.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/settings/seo-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@seoManageStore',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@seoManageStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.seo-manage.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.setting.seo-manage-images.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/settings/seo-manage-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\SettingController@seoManageImageStore',
        'controller' => 'App\\Http\\Controllers\\admin\\SettingController@seoManageImageStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.setting.seo-manage-images.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.list.subCategoryStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/category/subCategoryStore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@subCategoryStore',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@subCategoryStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.list.subCategoryStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.list.subCategory2Store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/category/subCategory2Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@subCategory2Store',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@subCategory2Store',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.list.subCategory2Store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.list.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@categoryDelete',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@categoryDelete',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.list.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonial.item.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/testimonial/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.testimonial.item.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.casestudies.item.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/casestudies/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.casestudies.item.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.item.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/newsletter/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.item.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.item.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/blog/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.item.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.video.item.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/video/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.video.item.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.award.item.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/award/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@deleteItem',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@deleteItem',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.award.item.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.criteria.meta.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/criteria/meta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaIndex',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaIndex',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.criteria.meta.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.criteria.meta.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/criteria/meta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaStore',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaStore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.criteria.meta.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.criteria.meta.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/criteria/meta/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaEdit',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaEdit',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.criteria.meta.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.criteria.meta.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/criteria/meta/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaUpdate',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaUpdate',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.criteria.meta.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.criteria.meta.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/criteria/meta/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaDelete',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@criteriaMetaDelete',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.criteria.meta.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'employee.index',
        'uses' => 'App\\Http\\Controllers\\admin\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\EmployeeController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/employee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'employee.create',
        'uses' => 'App\\Http\\Controllers\\admin\\EmployeeController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\EmployeeController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'employee.store',
        'uses' => 'App\\Http\\Controllers\\admin\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\EmployeeController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/employee/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'employee.show',
        'uses' => 'App\\Http\\Controllers\\admin\\EmployeeController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\EmployeeController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/employee/{employee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'employee.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\EmployeeController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\EmployeeController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/employee/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'employee.update',
        'uses' => 'App\\Http\\Controllers\\admin\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\EmployeeController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/employee/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'employee.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\EmployeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\EmployeeController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/admin/contactus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'contactus.index',
        'uses' => 'App\\Http\\Controllers\\admin\\ContactusController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\ContactusController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/admin/contactus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'contactus.create',
        'uses' => 'App\\Http\\Controllers\\admin\\ContactusController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\ContactusController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/admin/contactus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'contactus.store',
        'uses' => 'App\\Http\\Controllers\\admin\\ContactusController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\ContactusController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/admin/contactus/{contactu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'contactus.show',
        'uses' => 'App\\Http\\Controllers\\admin\\ContactusController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\ContactusController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/admin/contactus/{contactu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'contactus.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\ContactusController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\ContactusController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/admin/contactus/{contactu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'contactus.update',
        'uses' => 'App\\Http\\Controllers\\admin\\ContactusController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\ContactusController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/admin/contactus/{contactu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'contactus.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\ContactusController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\ContactusController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'client.index',
        'uses' => 'App\\Http\\Controllers\\admin\\ClientController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\ClientController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/client/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'client.create',
        'uses' => 'App\\Http\\Controllers\\admin\\ClientController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\ClientController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'client.store',
        'uses' => 'App\\Http\\Controllers\\admin\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\ClientController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'client.show',
        'uses' => 'App\\Http\\Controllers\\admin\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\ClientController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/client/{client}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'client.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\ClientController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\ClientController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'client.update',
        'uses' => 'App\\Http\\Controllers\\admin\\ClientController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\ClientController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'client.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\ClientController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\ClientController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'award.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/award',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'award.index',
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'award.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/award/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'award.create',
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'award.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/award',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'award.store',
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'award.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/award/{award}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'award.show',
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'award.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/award/{award}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'award.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'award.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/award/{award}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'award.update',
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'award.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/award/{award}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'award.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\AwardController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\AwardController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task.index',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task.create',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/task',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task.store',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task.show',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task/{task}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/task/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task.update',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/task/{task}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task-assign.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task-assign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task-assign.index',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskAssignController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskAssignController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task-assign.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task-assign/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task-assign.create',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskAssignController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskAssignController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task-assign.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/task-assign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task-assign.store',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskAssignController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskAssignController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task-assign.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task-assign/{task_assign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task-assign.show',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskAssignController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskAssignController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task-assign.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/task-assign/{task_assign}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task-assign.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskAssignController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskAssignController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task-assign.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/task-assign/{task_assign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task-assign.update',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskAssignController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskAssignController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'task-assign.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/task-assign/{task_assign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'task-assign.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\TaskAssignController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\TaskAssignController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'product.index',
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'product.create',
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'product.store',
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/product/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'product.show',
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/product/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'product.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/product/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'product.update',
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/product/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'product.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonials.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'testimonials.index',
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonials.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/testimonials/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'testimonials.create',
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonials.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'testimonials.store',
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonials.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'testimonials.show',
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonials.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/testimonials/{testimonial}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'testimonials.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonials.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'testimonials.update',
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonials.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'testimonials.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\TestimonialController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\TestimonialController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'blog.index',
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'blog.create',
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'blog.store',
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'blog.show',
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/blog/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'blog.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'blog.update',
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'blog.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\BlogController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'partners.index',
        'uses' => 'App\\Http\\Controllers\\admin\\PartnersController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\PartnersController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/partners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'partners.create',
        'uses' => 'App\\Http\\Controllers\\admin\\PartnersController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\PartnersController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'partners.store',
        'uses' => 'App\\Http\\Controllers\\admin\\PartnersController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\PartnersController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/partners/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'partners.show',
        'uses' => 'App\\Http\\Controllers\\admin\\PartnersController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\PartnersController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/partners/{partner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'partners.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\PartnersController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\PartnersController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/partners/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'partners.update',
        'uses' => 'App\\Http\\Controllers\\admin\\PartnersController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\PartnersController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partners.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/partners/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'partners.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\PartnersController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\PartnersController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'newsletter.index',
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/newsletter/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'newsletter.create',
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'newsletter.store',
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/newsletter/{newsletter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'newsletter.show',
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/newsletter/{newsletter}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'newsletter.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/newsletter/{newsletter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'newsletter.update',
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/newsletter/{newsletter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'newsletter.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\NewsletterController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\NewsletterController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'casestudies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/casestudies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'casestudies.index',
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'casestudies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/casestudies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'casestudies.create',
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'casestudies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/casestudies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'casestudies.store',
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'casestudies.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/casestudies/{casestudy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'casestudies.show',
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'casestudies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/casestudies/{casestudy}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'casestudies.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'casestudies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/casestudies/{casestudy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'casestudies.update',
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'casestudies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/casestudies/{casestudy}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'casestudies.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\CaseStudiesController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'video.index',
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/video/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'video.create',
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'video.store',
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/video/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'video.show',
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/video/{video}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'video.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/video/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'video.update',
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/video/{video}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'video.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\VideoController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\VideoController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-code.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/custom-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'custom-code.index',
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-code.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/custom-code/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'custom-code.create',
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-code.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/custom-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'custom-code.store',
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-code.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/custom-code/{custom_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'custom-code.show',
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-code.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/custom-code/{custom_code}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'custom-code.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-code.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/custom-code/{custom_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'custom-code.update',
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-code.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/custom-code/{custom_code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'custom-code.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\CustomCodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\CustomCodeController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'criteria.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/criteria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'criteria.index',
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@index',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'criteria.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/criteria/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'criteria.create',
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@create',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'criteria.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/criteria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'criteria.store',
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@store',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'criteria.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/criteria/{criterion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'criteria.show',
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@show',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@show',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'criteria.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/criteria/{criterion}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'criteria.edit',
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@edit',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'criteria.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'powerup/criteria/{criterion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'criteria.update',
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@update',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'criteria.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/criteria/{criterion}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'as' => 'criteria.destroy',
        'uses' => 'App\\Http\\Controllers\\admin\\CriteriaController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\CriteriaController@destroy',
        'namespace' => NULL,
        'prefix' => 'powerup/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tinypng' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/tinypng',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TinyPngController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\TinyPngController@index',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.tinypng',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tinypng.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/tinypng',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TinyPngController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\TinyPngController@store',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.tinypng.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tinypng.mediaTableCovert2Webp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/media-table-webp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TinyPngController@mediaTableCovert2Webp',
        'controller' => 'App\\Http\\Controllers\\admin\\TinyPngController@mediaTableCovert2Webp',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.tinypng.mediaTableCovert2Webp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tinypng.webp-converter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/webp-converter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TinyPngController@webpConverter',
        'controller' => 'App\\Http\\Controllers\\admin\\TinyPngController@webpConverter',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'tinypng.webp-converter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.productImage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/product/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@productImage',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@productImage',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.product.productImage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.product.productImage2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/product/image2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\ProductController@productImage2',
        'controller' => 'App\\Http\\Controllers\\admin\\ProductController@productImage2',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.product.productImage2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.list.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.list.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.category.list.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'powerup/category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\admin\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.category.list.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.trashed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/trashed/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TrashedController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\TrashedController@index',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.trashed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'powerup/trashed/{table}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TrashedController@destroy',
        'controller' => 'App\\Http\\Controllers\\admin\\TrashedController@destroy',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.trashed.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/trashed/restore/{table}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\TrashedController@restore',
        'controller' => 'App\\Http\\Controllers\\admin\\TrashedController@restore',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.trashed.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/dashboard2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DashboardController@dashboard2',
        'controller' => 'App\\Http\\Controllers\\admin\\DashboardController@dashboard2',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'dashboard2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.test' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\DashboardController@test',
        'controller' => 'App\\Http\\Controllers\\admin\\DashboardController@test',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.photo.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'powerup/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'AuthCheck',
        ),
        'uses' => 'App\\Http\\Controllers\\admin\\PhotoManageController@index',
        'controller' => 'App\\Http\\Controllers\\admin\\PhotoManageController@index',
        'namespace' => NULL,
        'prefix' => '/powerup',
        'where' => 
        array (
        ),
        'as' => 'admin.photo.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uFpbLSZ8WVKX8yHu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:314:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:96:"function() {
    $exitCode = \\Artisan::call(\'route:cache\');
    return \'Routes cache cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007379307b000000007f53c611";}";s:4:"hash";s:44:"awfon4BMLYjgKJdCO+IPhGtCqIQ765Qpa3vySHLdLW8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::uFpbLSZ8WVKX8yHu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EDBErGItOQ99OykC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'config-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:315:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:97:"function() {
    $exitCode = \\Artisan::call(\'config:cache\');
    return \'Config cache cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000073793073000000007f53c611";}";s:4:"hash";s:44:"8lg+n0s+2hoj9zgQz+5m49WROcunQEfOABoiy3XFiII=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EDBErGItOQ99OykC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WbA6ukq8lIBS967B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:320:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:101:"function() {
    $exitCode = \\Artisan::call(\'cache:clear\');
    return \'Application cache cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007379308f000000007f53c611";}";s:4:"hash";s:44:"FnoZqPNvVGZOY4NEElAseVXlXdCF1ZO1RXeIIU4jG6I=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WbA6ukq8lIBS967B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6v0Y4jsGmNoUfXtV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:311:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:93:"function() {
    $exitCode = \\Artisan::call(\'view:clear\');
    return \'View cache cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007379308d000000007f53c611";}";s:4:"hash";s:44:"eHM5xd5j4lBxQtigRrOz5CQyzUWMAEjIV/UNkRHqrt0=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6v0Y4jsGmNoUfXtV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YAOLl5VdsR8qC2yz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:311:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:93:"function() {
    $exitCode = \\Artisan::call(\'migrate\');
    return \'Migrate Command Fired\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000007379308b000000007f53c611";}";s:4:"hash";s:44:"ZvuZV5gpZz59jE6GChOmkYr+2bVvGTsGnsDE4UlRpFg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YAOLl5VdsR8qC2yz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LdAb1ZqupEgGv69R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'all-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:476:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:257:"function() {
    $exitCode = \\Artisan::call(\'route:cache\');
    $exitCode = \\Artisan::call(\'config:cache\');
    $exitCode = \\Artisan::call(\'cache:clear\');
    $exitCode = \\Artisan::call(\'view:clear\');
    return \'Route, Config, Cache, View cache cleared\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000073793089000000007f53c611";}";s:4:"hash";s:44:"+0zAy2O9lheQPryxbn1vjeiwatHPwbYflaDWpE4lcjs=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LdAb1ZqupEgGv69R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mGw2AHFVOqmBy893' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'list-route',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:914:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:695:"function () {
    $routeCollection = \\Illuminate\\Support\\Facades\\Route::getRoutes();

    echo "<table style=\'width:100%\'>";
    echo "<tr>";
    echo "<td width=\'10%\'><h4>HTTP Method</h4></td>";
    echo "<td width=\'10%\'><h4>Route</h4></td>";
    echo "<td width=\'10%\'><h4>Name</h4></td>";
    echo "<td width=\'70%\'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000073793087000000007f53c611";}";s:4:"hash";s:44:"4U0dR25/JMFnTwLW18EGfZUMaSbxtkIZuNqBvSTUgL4=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mGw2AHFVOqmBy893',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FKPitsQaCwZAo2Nd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@product_internal',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@product_internal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FKPitsQaCwZAo2Nd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ORI8KznpVvgdRbGx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@product_internal',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@product_internal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ORI8KznpVvgdRbGx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V4EOE0RvBGL9pGDS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@category_product',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@category_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V4EOE0RvBGL9pGDS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EyFcHsOS33BZpkDy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{category}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@category_product',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@category_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EyFcHsOS33BZpkDy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8HfCwIkumZVqTmd9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{category}/{subCategory}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@category_subcategory_product',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@category_subcategory_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8HfCwIkumZVqTmd9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s0bWJUowrnMEgtKY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\home\\HomeController@search_criteria',
        'controller' => 'App\\Http\\Controllers\\home\\HomeController@search_criteria',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::s0bWJUowrnMEgtKY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
