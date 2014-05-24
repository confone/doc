<?php
register('/index',    new GeneralHomeController());
register('/content',  new ContentHomeController());
register('/security', new SecurityHomeController());
register('/faq',      new FaqHomeController());
?>
