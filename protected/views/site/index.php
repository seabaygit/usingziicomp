<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to Our Application. :</i></h1>
<h1>Objective: To query the Sakila Database - Modified </h1>


<ul>
   <a href="http://localhost/usingziicomp/index.php?r=grid/sqlbasics">Film Descriptions Basics</a>
   <br>
  
    <a href="http://localhost/usingziicomp/index.php?r=grid/sqlbyyear">Films Ordered by Year of Release</a>
    
   <?php
    $this->beginContent('//decorators/quote', array('author'=>'This is a very different problem','author2'=>'And added issues'));
    ?>
    If anything happens is going to be premeditated
    <?php $this->endContent()?>
    
    

<?php


