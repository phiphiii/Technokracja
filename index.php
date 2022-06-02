<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0"> 
    <title>TechnoNews</title>
    <link rel="stylesheet" href="main.css"/>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body>

<nav>
    <div class="container">
    <h1>TechnoNews</h1>
    <div class="menu">
        <a href="index.php" class="is-active">Główna</a>
        <a href="about.php">O nas</a>
        <a href="contact.php">Kontakt</a>
        <?php
            if(isset($_SESSION["username"])){
                echo '<a href="profile.php">Profil</a>';
            }
            else{
                echo '<a href="login.php">Logowanie</a>';
            }
        ?>
 
    </div>
    <button class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>
    </div>
</nav>

<br><br><br><br><br>
<section class = "banner">
               <div class = "banner-main-content">
                   <h2>NAJNOWSZE NEWSY Z ŚWIATA TECHNOLOGI</h2>
                   <h3>Najlepszy portal z świata technologi na świecie.<br>(a może nawet i w Polsce)</h3>
   
                   <button>
                       <a href = "#">Dowiedz się więcej</a>
                   </button>
   
                   <div class = "current-news-head">
                       <h3>Temat1  <span>stworzone przez Boguslav Sashka</span></h3>
   
                       <h3>Temat2 <span>stworzone przez Su'en Theofylaktos</span></h3>
   
                       <h3>Temat3 <span>stworzone przez Belshazzar Adalberto</span></h3>
   
                       <h3>Temat4 <span>stworzone przez Jehona Menes</span></h3>
                   </div>
               </div>
   
               <div class = "banner-sub-content">
                   <div class = "hot-topic">
                       <img src = "img/banner-news-1.jpg" alt = "">
   
                       <div class = "hot-topic-content">
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <h3></h3>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore consequatur nostrum minus iusto fugit unde.</p>
                           <a href = "#">Dowiedz się więcej</a>
                       </div>
                   </div>
   
                   <div class = "hot-topic">
                       <img src = "img/banner-news-2.jpg" alt = "">
   
                       <div class = "hot-topic-content">
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <h3></h3>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore consequatur nostrum minus iusto fugit unde.</p>
                           <a href = "#">Dowiedz się więcej</a>
                       </div>
                   </div>
   
                   <div class = "hot-topic">
                       <img src = "img/banner-news-3.jpg" alt = "">
   
                       <div class = "hot-topic-content">
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <h3></h3>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore consequatur nostrum minus iusto fugit unde.</p>
                           <a href = "#">Dowiedz się więcej</a>
                       </div>
                   </div>
   
                   <div class = "hot-topic">
                       <img src = "img/banner-news-4.jpg" alt = "">
   
                       <div class = "hot-topic-content">
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <h3></h3>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore consequatur nostrum minus iusto fugit unde.</p>
                           <a href = "#">Dowiedz się więcej</a>
                       </div>
                   </div>
               </div>
           </section>
           
           <hr>
   
           <main>
               <section class = "main-container-left">
                   <h2>Najpopularniejsze wiadomości</h2>
                   <div class = "container-top-left">
                       <article>
                           <img src = "img/top-left.jpg">
   
                           <div>
                               <h3>Auto news</h3>
   
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea sint, nisi rem earum fugit? Facere veritatis sapiente eveniet quibusdam.</p>
   
                               <a href = "#">Dowiedz się więcej <span>>></span></a>
                           </div>
                       </article>
                   </div>
   
                   <div class = "container-bottom-left">
                       <article>
                           <img src = "img/bottom-left-1.jpg">
                           <div>
                               <h3>Głośnik news</h3>
                               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>
   
                               <a href = "#">Dowiedz się więcej <span>>></span></a>
                           </div>
                       </article>
   
                       <article>
                           <img src = "img/bottom-left-2.jpg">
                           <div>
                               <h3>Telefon news</h3>
                               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi iure modi animi cupiditate. Explicabo, nihil?</p>
   
                               <a href = "#">Dowiedz się więcej <span>>></span></a>
                           </div>
                       </article>
                   </div>
               </section>
   
               <section class = "main-container-right">
                   <h2>Najnowsze wiadomości</h2>
                   
                   <article>
                       <h4> </h4>
                       <div>
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
   
                           <a href = "#">Dowiedz się więcej <span>>></span></a>
                       </div>
                       <img src = "img/right-1.jpg">
                   </article>
   
                   <article>
                       <h4> </h4>
                       <div>
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
   
                           <a href = "#">Dowiedz się więcej <span>>></span></a>
                       </div>
                       <img src = "img/right-2.jpg">
                   </article>
   
                   <article>
                       <h4> </h4>
                       <div>
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
   
                           <a href = "#">Dowiedz się więcej <span>>></span></a>
                       </div>
                       <img src = "img/right-3.jpg">
                   </article>
   
                   <article>
                       <h4> </h4>
                       <div>
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
   
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
   
                           <a href = "#">Dowiedz się więcej <span>>></span></a>
                       </div>
                       <img src = "img/right-4.jpg">
                   </article>
   
                   <article>
                       <h4> </h4>
                       <div>
                           <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h2>
   
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, repellendus?</p>
   
                           <a href = "#">Dowiedz się więcej <span>>></span></a>
                       </div>
                       <img src = "img/right-5.jpg">
                   </article>
               </section>
           </main>
    <footer class="footer">
        <div class="inner-footer">
            <div class="social-links">
             
                    <li class="social-items"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li class="social-items"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li class="social-items"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li class="social-items"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
               
            </div>
            <div class="quick-links">
                <ul>

                    <li class="quick-items"><a href="#">Regulamin</a></li>

                </ul>
            </div>
        </div>
        <div class="outer-footer">
            Copyright &copy; TechnoNews Corp. All Rights Reserved.
        </div>
    </footer>
    <script src="main.js"></script>

</body>
</html>