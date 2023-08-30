<!--?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?-->
<?php
 include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
/*$name = $_SESSION['name'];;*/

include_once 'dbConnection.php';
/*echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
*/}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EBOOK ENGLISH</title>
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
  <body>
    <nav>
      <div class="">
            <img src="./image/key.png" alt="logo" />
          </div>
          <div id="menu-icon" class="menu-icon">
            <i class="ph-fill ph-list"></i>
          </div>
          <ul id="menu-list" class="hidden">
            <li>
              <a href="#">Home</a>
              <ul class="dropdown-menu">
                <li><a href="./HTML/kindergarten/kindergarten/kidergarten.html">Kindergarten and Pre-K</a></li>
                <li><a href="./HTML/Grade 1/Grade1/grade1.html">Grade 1</a></li>
                <li><a href="./HTML/Grade 2/HTML/Grade2.php">Grade 2</a></li>
                <li><a href="./HTML/Grade 3/Grade 3/grade3.html">Grade 3</a></li>
                </ul>
            </li>
            <li>
              <a href="dash.php?q=1">Manage </a>
            </li>
            <li>
              <a href="./HTML/Game/question.php"></a>
            </li>
              <li>
                <a href="#">
                  <div class="user-icon">
                    <i class="fas fa-user-circle"></i>
                  </div>
                  <span class="user-name"><?php echo $_SESSION['name']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="account.php">Login with user</a></li>
                  <li><a href="logout.php">Log Out</a></li>
              </li>
            </ul>
          </ul>
        </nav>
        <main>
          <div class="row">
          <div class="project-container">
            <article class="article-wrapper">
              <div class="rounded-lg container-project">
                <a href="./HTML/kindergarten/kindergarten/kidergarten.html"><img class="rounded-lg container-project" src="image/kindergarten.jpg" alt=""></a>
                </div>
                <div class="project-info">
                  <div class="flex-pr">
                    <div class="project-title text-nowrap">Kindergarten</div>
                      <div class="project-hover">
                        <a href="./HTML/kindergarten/kindergarten/kidergarten.html">
                          <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" color="black" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"><line y2="12" x2="19" y1="12" x1="5"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        </div>
                      </div>
                      <div class="types">
                        <span style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" class="project-type">• Kindergarten</span>
                        <span class="project-type">• Dashboards</span>
                    </div>
                </div>
            </article>
            <article class="article-wrapper">
              <div class="rounded-lg container-project">
                <a href="./HTML/Grade 1/Grade1/grade1.html">
              <img class="rounded-lg container-project" src="image/grade 1.jpg" alt=""></a>
                </div>
                <div class="project-info">
                  <div class="flex-pr">
                    <div class="project-title text-nowrap">Grade 1</div>
                      <div class="project-hover">
                        <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" color="black" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"><line y2="12" x2="19" y1="12" x1="5"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                      </div>
                      <div class="types">
                        <span style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" class="project-type">• Grade 1</span>
                        <span class="project-type">• Dashboards</span>
                    </div>
                </div>
            </article>
            <article class="article-wrapper">
              <div class="rounded-lg container-project">
                <a href="./HTML/Grade 2/HTML/Grade2.php"><img class="rounded-lg container-project" src="image/grade 2.jpg" alt=""></a>
                </div>
                <div class="project-info">
                  <div class="flex-pr">
                    <div class="project-title text-nowrap">Grade 2</div>
                      <div class="project-hover">
                        <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" color="black" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"><line y2="12" x2="19" y1="12" x1="5"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                      </div>
                      <div class="types">
                        <span style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" class="project-type">• Grade 2</span>
                        <span class="project-type">• Dashboards</span>
                    </div>
                </div>
            </article>
            <article class="article-wrapper">
              <div class="rounded-lg container-project">
                <a href="./HTML/Grade 3/Grade 3/grade3.html"><img class="rounded-lg container-project" src="image/grade 3.jpg" alt=""></a>
                </div>
                <div class="project-info">
                  <div class="flex-pr">
                    <div class="project-title text-nowrap">Grade 3</div>
                      <div class="project-hover">   
                        <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" color="black" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"><line y2="12" x2="19" y1="12" x1="5"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </div>
                      </div>
                      <div class="types">
                        <span style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" class="project-type">• Grade 3</span>
                        <span class="project-type">• Dashboards</span>
                    </div>
                </div>
            </article>
          </div>
          </div>
    </main>
    <script src="./index.js"></script>
  </body>
</html>
