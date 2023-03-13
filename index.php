<?php

    require_once "connection.php";

    extract($_POST);
    if(isset($submit))
    {
        $mysql = "INSERT INTO `contact_forms`(name,phone,email,comment) VALUES ('$name','$phone','$email','$email')";
        if($conn->query($mysql)==TRUE)
        {
            echo "<script>alert('Submitted! Will Contact You soon')</script>";
        }
        else
        {
            echo "<script>alert('Faild! Re-Submit the Form')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panmei's Store</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="navbar">
                <div class="logo">
                    <h3><em><a href="#">Panmei's Store</a></em></h3>
                </div>
                <a href="#" class="toggle-btn">
                    <img src="./list.svg" alt="">
                </a>
                <div class="nav-links">
                    <ul>
                        <li>
                            <a href="./index.html" class="active">Home</a>
                        </li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#arrival">Shop</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                        <li>
                            <a href="#">
                              <button class="btn btn-link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                              </svg></button>

                              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                  <h5 class="offcanvas-title" id="offcanvasRightLabel">Your Cart</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                 <p>Your Shopping Cart is Empty</p>
                                 <button class="btn btn-secondary">CONTINUE SHOPPING</button>
                                </div>
                              </div></a>
                        </li>
                        <li>
                            <a href="#contact-form"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                              </svg></a>
                        </li>
                        <li>
                            <a href="#phone"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg></a>
                        </li>
                        <li>
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                              </svg></a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
    <section id="top">
        <div class="index">
            <h1>Clothing & Fashion</h1>
            <h2>A Ladies Clothing Store Boutique</h2>
        </div>
        <div class="background">
            <img src="./head_image.webp" alt="">
        </div>
        <aside>
            <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                Need Help ?
                <!-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                2 -->
              </button>
        </aside>
    </section>
    <section id="about">
        <div class="more-products">
            <h1 style="text-align:center;">About</h1>
            <hr>
            <div class="block">
                <div class="image">
                    <img src="./bags2.webp" alt="">
                    <img src="./bags.webp" alt="">
                    <img src="./bags3.webp" alt="">
                </div>
                <div class="para">
                    <p>The About page is the core description of your website. Here is where you let clients know what your website is about. You can edit all of this text and replace it with what you want to write. For example you can let them know how long you have been in business, what makes your company special, what are its core values and more. The About page is the core description of your website. Here is where you let clients know what your website is about. You can edit all of this text and replace it with what you want to write. For example you can let them know how long you have been in business, what makes your company special, what are its core values and more. The About page is the core description of your website. Here is where you let clients know what your website is about. You can edit all of this text and replace it with what you want to write. For example you can let them know how long you have been in business, what makes your company special, what are its core values and more.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="arrival">
        <div class="headings">
            <h1 style="text-align:center;">New Arrivals</h1>
            <hr>
            <div class="products">
                <div class="card" style="width: 18rem;">
                   <a href=""> <img src="./bag1.webp" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <div class="s-flex" style="display:flex;justify-content:space-between">
                        <div class="card-title">
                            <h5>Runner fabric bag from
                                <h5>CITYLIGHT</h5>
                            </h5>
                        </div>
                        <div class="price">
                            &#x20B9;259
                        </div>
                      </div>
                      <p class="card-text">To edit this section, fo to pages and find your store pages, then click edit</p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
                <div class="card" style="width: 18rem;">
                    <img src="./bag2.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="s-flex" style="display:flex;justify-content:space-between">
                        <div class="card-title">
                            <h5>Illusion from
                                <h5>WONDERTOUCH</h5>
                            </h5>
                        </div>
                        <div class="price">
                            &#x20B9;180
                        </div>
                      </div>
                      <p class="card-text">To edit this section, fo to pages and find your store pages, then click edit</p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
                <div class="card" style="width: 18rem;">
                    <img src="./bag3.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="s-flex" style="display:flex;justify-content:space-between">
                        <div class="card-title">
                            <h5>Black Swan from
                                <h5>CHROMBACHER</h5>
                            </h5>
                        </div>
                        <div class="price">
                            &#x20B9;245
                        </div>
                      </div>
                      <p class="card-text">To edit this section, fo to pages and find your store pages, then click edit</p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
                <div class="card" style="width: 18rem;">
                    <img src="./bag4.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="s-flex" style="display:flex;justify-content:space-between">
                        <div class="card-title">
                            <h5>Red Crown from 
                                <h5>BENEDRILE</h5>
                            </h5>
                        </div>
                        <div class="price">
                            &#x20B9;300
                        </div>
                      </div>
                      <p class="card-text">To edit this section, fo to pages and find your store pages, then click edit</p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
                <div class="card" style="width: 18rem;">
                    <img src="./bag5.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="s-flex" style="display:flex;justify-content:space-between">
                        <div class="card-title">
                            <h5>Stree Ranger from 
                                <h5>SENTINEL</h5>
                            </h5>
                        </div>
                        <div class="price">
                            &#x20B9;110
                        </div>
                      </div>
                      <p class="card-text">To edit this section, fo to pages and find your store pages, then click edit</p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
                <div class="card" style="width: 18rem;">
                    <img src="./bag6.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="s-flex" style="display:flex;justify-content:space-between">
                        <div class="card-title">
                            <h5>Urban Brownie from
                                <h5>TIMBERWOLF</h5>
                            </h5>
                        </div>
                        <div class="price">
                            &#x20B9;200
                        </div>
                      </div>
                      <p class="card-text">To edit this section, fo to pages and find your store pages, then click edit</p>
                      <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <section id="main">
        <div class="headings">
            <br>
            <h1 style="text-align:center;">Main Categories</h1>
            <hr>
            <div class="main-images">
                <div class="images">
                    <img src="./bag4.webp" alt="">
                </div>
                <div class="images">
                    <img src="./bag1.webp" alt="">
                </div>
                <div class="images">
                    <img src="./bag3.webp" alt="">
                </div>
            </div>
        </div>
    </section>
    <footer id="contact">
        <div class="headings">
            <br>
            <h1 style="text-align:center;">Contact</h1>
            <hr>
            <div class="d-flex">
                <div class="address" style="text-align:center; line-height:40px">
                    <h5>Utopia, Appolo, Manipur</h5>
                    <a href="tel:7982239573" id="phone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg> +91-7982239573
                    </a>
                    <p><a href="mailto:kasparpanmeibboy@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                          </svg> kasparpanmeibboy@gmail.com
                    </a></p>
                </div>
                <div id="contact-form"class="contact-form">
                    <form method="post">
                        <div class="f-flex">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nameexample1" name="name" placeholder="Name" required>
                              </div>
                              <div class="mb-3">
                                <input type="password" class="form-control" id="exampleInputPhone" name="phone" placeholder="Phone" required>
                              </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Email Address" required>
                          </div>
                          <div class="mb-3">
                            <textarea name="comment" id="area" cols="54" rows="5" placeholder="Message"></textarea>
                          </div>
                        <button type="submit" name="submit" class="btn btn-primary">Contact Us</button>
                      </form>
                </div>
            </div>
            <div class="frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1090.7099316804847!2d93.50212275201883!3d24.996773208036224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDU5JzQ5LjAiTiA5M8KwMzAnMDguNyJF!5e0!3m2!1sen!2sin!4v1678010133284!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="second-footer">
                <div class="second-address">
                    <h4>Panmei's Store</h4>
                    <p>Copyright &copy;2023 All rights reserved</p>
                    <p>Powered by WebHost000</p>
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="./index.html">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#arrival">SHOP</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="./main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>