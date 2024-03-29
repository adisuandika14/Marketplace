<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{asset('assets/css/templatemo_style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/ddsmoothmenu.js')}}"></script>
<script type="text/javascript">
ddsmoothmenu.init({
    mainmenuid: "templatemo_menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}" />
<script language="javascript" type="text/javascript" src="{{asset('assets/scripts/mootools-1.2.1-core.js')}}"></script>
<script language="javascript" type="text/javascript" src="{{asset('assets/scripts/mootools-1.2-more.js')}}"></script>
<script language="javascript" type="text/javascript" src="{{asset('assets/scripts/slideitmoo-1.1.js')}}"></script>
<script language="javascript" type="text/javascript">
    window.addEvents({
        'domready': function(){
            /* thumbnails example , div containers */
            new SlideItMoo({
                        overallContainer: 'SlideItMoo_outer',
                        elementScrolled: 'SlideItMoo_inner',
                        thumbsContainer: 'SlideItMoo_items',        
                        itemsVisible: 5,
                        elemsSlide: 2,
                        duration: 200,
                        itemsSelector: '.SlideItMoo_element',
                        itemWidth: 171,
                        showControls:1});
        },
        
    });

    function clearText(field)
    {
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
</script>
</head>

<body id="home">
<div id="templatemo_wrapper">
    <div id="templatemo_header">
        <div id="site_title">
            <h1><a href="#"></a></h1>
        </div>
        
        <div id="header_right">
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            <br>
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.html" class="selected">Home</a></li>
            <li><a href="products.html">Products</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
              </ul>
            </li>
            <li><a href="about.html">About</a>
                <ul>
                    <li><a href="#">Sub menu 1</a></li>
                    <li><a href="#">Sub menu 2</a></li>
                    <li><a href="#">Sub menu 3</a></li>
                    <li><a href="#">Sub menu 4</a></li>
                    <li><a href="#">Sub menu 5</a></li>
              </ul>
            </li>
            <li><a href="faqs.html">FAQs</a></li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="contact.html">Contact</a></li>
            <ul id="language">
                <li><a href="logout"><img src="../assets/images/user.ico" height="48" weight="48" alt="English" /></a></li>
            </ul>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_middle">
        <img src="../assets/images/templatemo_image_01.png" alt="Image 01" />
        <h1>Introducing Web Store</h1>
        <p>Web Store is a free css template for your personal or commercial websites. Feel free to download, edit and use this template for any purpose.</p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->
    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
        <div id="product_slider">
            <div id="SlideItMoo_outer"> 
                <div id="SlideItMoo_inner">         
                    <div id="SlideItMoo_items">
                        <div class="SlideItMoo_element">
                                <a href="#slide1" target="_parent">
                                <img src="../assets/images/gallery/01.jpg" alt="product 1" /></a>
                        </div>  
                        <div class="SlideItMoo_element">
                                <a href="#slide2" target="_parent">
                                <img src="../assets/images/gallery/02.jpg" alt="product 2" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide3" target="_parent">
                                 <img src="../assets/images/gallery/03.jpg" alt="product 3" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide4" target="_parent">
                                <img src="../assets/images/gallery/04.jpg" alt="product 4" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide5" target="_parent">
                               <img src="../assets/images/gallery/05.jpg" alt="product 5" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide6" target="_parent">
                                <img src="../assets/images/gallery/06.jpg" alt="product 6" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#slide6" target="_parent">
                                <img src="../assets/images/gallery/07.jpg" alt="product 7" /></a>
                        </div>
                    </div>          
                </div>
            </div>
            <div class="cleaner"></div>
        </div>
        
        <div id="sidebar">
            <h3>Categories</h3>
            <ul class="sidebar_menu">
                <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>                
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>             
                <li><a href="#">Etiam in tellus</a></li>
                <li><a href="#">Hendrerit justo</a></li>     
                <li><a href="#">Integer interdum</a></li>               
                <li><a href="#">Maecenas a diam</a></li>
                <li><a href="#">Nullam in semper</a></li>
                <li><a href="#">Posuere in commodo</a></li>
                <li><a href="#">Tincidunt leo</a></li>
                <li><a href="#">Vestibulum blandit</a></li>
            </ul>
            <h3>Newsletter</h3>
            <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
            <div id="newsletter">
                <form action="#" method="get">
                  <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->
        
        <div id="content">
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="../assets/images/product/01.jpg" alt="Product 01" /></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="../assets/images/product/02.jpg" alt="Product 02" /></a>
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery no_margin_right">
                <a href="productdetail.html"><img src="../assets/images/product/03.jpg" alt="Product 03" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="../assets/images/product/04.jpg" alt="Product 04" /></a>
                <h3>Proin volutpat</h3>
                <p class="product_price">$ 260</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="images/product/05.jpg" alt="Product 05" /></a>
                <h3>Aenean tempus</h3>
                <p class="product_price">$ 80</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery no_margin_right">
                <a href="productdetail.html"><img src="../assets/images/product/06.jpg" alt="Product 06" /></a>
                <h3>Nulla luctus urna</h3>
                <p class="product_price">$ 193</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="../assets/images/product/07.jpg" alt="Product 07" /></a>
                <h3>Pellentesque egestas</h3>
                <p class="product_price">$ 30</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery">
                <a href="productdetail.html"><img src="../assets/images/product/08.jpg" alt="Product 08" /></a>
                <h3>Suspendisse porttitor</h3>
                <p class="product_price">$ 220</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
            <div class="col col_14 product_gallery no_margin_right">
                <a href="productdetail.html"><img src="../assets/images/product/09.jpg" alt="Product 09" /></a>
                <h3>Nam vehicula</h3>
                <p class="product_price">$ 65</p>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
            </div>          
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
        <div class="col col_16">
            <h4>Categories</h4>
            <ul class="footer_menu">
                <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>                
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>             
          </ul>  
        </div>
        <div class="col col_16">
            <h4>Pages</h4>
            <ul class="footer_menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>  
        </div>
        <div class="col col_16">
            <h4>Partners</h4>
            <ul class="footer_menu">
                <li><a href="#">Website Templates</a></li>
                <li><a href="#">HTML CSS Layouts</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Free Graphics</a></li>
            </ul>  
        </div>
        <div class="col col_16">
            <h4>Social</h4>
            <ul class="footer_menu">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">LinkedIn</a></li> 
          </ul>  
        </div>
        <div class="col col_13 no_margin_right">
            <h4>About Us</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>
        
        <div class="cleaner h40"></div>
        <center>
            Copyright © 2048 Your Company Name
        </center>
    </div> <!-- END of footer -->   
   
</div>

</body>
</html>