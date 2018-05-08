<?php

$HEADER =<<<EOT
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>{{TITLE}}</title> 
  <meta name="description" content= "{{DESCRIPTION}}">
  <meta name="author" content="Łukasz Mazurkiewicz">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0"/>
{{STYLES}}
{{INNER-STYLE}}
</head>
<body>
EOT;

$FOOTER =<<<EOT
{{SCRIPTS}}
</body>
</html>   
EOT;

/**
* Klasa sluzaca do generowania stron ustalonej witryny
* @package myPage
*/
class MyPage {
  private $title        = "";
  private $description  = "";
  private $root         = "";
  private $cssfiles     = [];
  private $jsfiles      = [];
  private $innerStyle   = "";
  
  /**
  * Dodaje specyficzne style do strony
  * @param string $filename
  * @return void
  */
  public function AddCSS($filename) {
    $this->cssfiles[] = $filename;
  }

  /**
  * Ustalamy skrypty umieszczane w nagłówku 
  * @param string $filename
  * @return void
  */
  public function AddJS($filename) {
    $this->jsfiles[] = $filename;
  }
  
  /**
  * Ustawienie opisu strony (description)
  * @param string $s
  * @return void
  */
  public function SetDescription($s) {
    $this->description = $s;
  }

  /**
  * Dodanie wewnętrznego stylu strony
  * @param string $s
  * @return void
  */
  public function AddInnerStyle($s) {
    $this->innerStyle = $s;
  }

  public function CreateMenu($active="home", $filename="menu.json"){
    $string = file_get_contents($this->root . $filename);
    $menuArray = json_decode($string);

    $dropdownLI = '<li id="option-{{NUMBER}}" class="dropdown" onclick="hideShowDropdown(\'option-{{NUMBER}}\')">';
    $dropdownA = '<a href="javascript:void(0)" class="dropbtn">{{LABEL}}<span class="caret"></span></a>';
    $standardLI = '<li><a href="{{ROOT}}{{LINK}}">{{LABEL}}</a></li>';
    $activeLI = '<li><a class="active">{{LABEL}}</a></li>';
    $homeTemplate = '<li><a href={{ROOT}}index.php><img src="{{ROOT}}img/home.svg" alt="Home" class="home-icon"></a></li>';
    $homeActiveTemplate='<li><a class="active"><img src="{{ROOT}}img/home.svg" alt="Home" class="home-icon"></a></li>';

    $X=[];
    $X[] = "<nav>";
    $X[] = "<ul class=\"navbar-top\">";
    //adding home icon
    if(strcmp("home", $active)===0){
      $X[] = str_replace("{{ROOT}}", $this->root, $homeActiveTemplate);
    }else{
      $X[] = str_replace("{{ROOT}}", $this->root, $homeTemplate);
    }
    for($i = 0; $i < count($menuArray); $i++){
      if(property_exists($menuArray[$i], "submenu")){
        $X[] = str_replace("{{NUMBER}}", $i, $dropdownLI);
        $X[] = str_replace("{{LABEL}}", $menuArray[$i]->{'label'}, $dropdownA);
        $X[] = '<ul class="dropdown-content">';
        for($j = 0; $j < count($menuArray[$i]->{'submenu'}); $j++){
          if(strcmp($menuArray[$i]->{'submenu'}[$j]->{'label'}, $active)===0){
            $X[] = str_replace(["{{ROOT}}", "{{LINK}}", "{{LABEL}}"], [$this->root, $menuArray[$i]->{'submenu'}[$j]->{'link'}, $menuArray[$i]->{'submenu'}[$j]->{'label'}], $activeLI);
          }else{
            $X[] = str_replace(["{{ROOT}}", "{{LINK}}", "{{LABEL}}"], [$this->root, $menuArray[$i]->{'submenu'}[$j]->{'link'}, $menuArray[$i]->{'submenu'}[$j]->{'label'}], $standardLI);
          }
        }
        $X[] = '</ul>';
        $X[] = '</li>';
      }elseif(strcmp($menuArray[$i]->{'label'}, $active)===0){
        $X[] = str_replace(["{{ROOT}}", "{{LINK}}", "{{LABEL}}"], [$this->root, $menuArray[$i]->{'link'}, $menuArray[$i]->{'label'}], $activeLI);
      }else{
        $X[] = str_replace(["{{ROOT}}", "{{LINK}}", "{{LABEL}}"], [$this->root, $menuArray[$i]->{'link'}, $menuArray[$i]->{'label'}], $standardLI);
      }
    }

    $X[] = "</ul>";
    $X[] = "<span class=\"icon\" onclick=\"hideShowMenu()\">☰</span>";
    $X[] = "</nav>";
    return join("\n", $X);
  }
  
  /**
  * Ustawienie opisu strony
  * @param string $title - tytul strony
  * @param string $root - sciezka do glownego katalogu witryny
  * @return void
  */
  
  public function __construct($title = "", $root="") {
    $this->title = $title;
    $this->root  = $root;
    $this->AddCSS("reset.css");
    $this->AddCSS("grid.css");
    $this->AddCSS("navbar.css");
    $this->AddCSS("style.css");

    $this->AddJS("navbar.js");
  }

  /**
  * Zwraca lancuch z poczatkiem strony
  * @return string
  */  
  public function Begin() {
    global $HEADER;
    $s = str_replace(["{{TITLE}}", "{{DESCRIPTION}}"], [$this->title, $this->description], $HEADER);
    
    //dodajemy style
    $X = [];
    $C = $this->cssfiles;
    $TMP = '  <link rel="stylesheet" href="{{R}}css/{{CSS}}">' . "\n";
    for ($i = 0; $i < count($C); $i++){
      $X[]= (string) str_replace(["{{R}}", "{{CSS}}"], [$this->root, (string) $C[$i]], $TMP);
    }
    $s= str_replace("{{STYLES}}", join("\n",$X), $s);

    // dodajemy skrypty
    $X = [];
    $C = $this->jsfiles;
    $T = '  <script src="{{R}}js/{{JS}}"></script>' . "\n";
    for ($i = 0; $i < count($this->jsfiles); $i++){
      $X[]= str_replace(["{{R}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
    } 
    $s= str_replace("{{SCRIPTS}}", join("\n",$X), $s);
    
    // aktualizujemy styl wewnętrzny strony
    $X = ($this->innerStyle === "") ? "" : "<style>\n" . $this->innerStyle . "\n</style>\n"; 
    $s= str_replace("{{INNER-STYLE}}", $X, $s);
    
    // usuwamy puste linie
    //return preg_replace('/^[ \t]*[\r\n]+/m', '', $s);
    return preg_replace('/^\h*\v+/m', '', $s);
    // \h : dowolny poziomy pusty znak
    // \v : dowolny pionowy pusty znak
    // /m : multiline
  }

  /**
  * Zwraca lancuch z zamknieciem strony
  * @return string
  */    
  public function End() {
    global $FOOTER;
    // dodajemy skrypty
    $X = [];
    $C = $this->jsfiles;
    $T = '  <script src="{{R}}js/{{JS}}"></script>' . "\n";
    for ($i = 0; $i < count($this->jsfiles); $i++){
      $X[]= str_replace(["{{R}}", "{{JS}}"], [$this->root, (string) $C[$i]], $T);
    } 
    $s= str_replace("{{SCRIPTS}}", join("\n",$X), $FOOTER);
    return $s;
  }  

} //class MyPage

?>