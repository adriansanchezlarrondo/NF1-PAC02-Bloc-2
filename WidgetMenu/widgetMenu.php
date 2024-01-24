<?php

interface Observer{

    public function update(Observable $subject);

}

abstract class Widget implements Observer{

    protected $internalData = array();

    abstract public function draw();

    public function update(Observable $subject){
        $this->internalData = $subject->getData();
    }

}


class MenuAnimals extends Widget{
    
    public function draw(){

        $html = "<html><head>";
        $html.= "<link rel='stylesheet' href='style.css'>";
        $html.= "</head><body>";
		$html.= "<ul class='hList'>";
        $html.= "<li>";
		$html.= "<a href='#click' class='menu'>";
        $html.= "<h2 class='menu-title'>animals</h2>";
		$html.= "<ul class='menu-dropdown'>";

        $numFilas = count($this->internalData[0]); // numero de filas

        for ($i=0; $i < $numFilas; $i++) { 
            
            $animals = $this->internalData[0]; 

            if ($animals[$i] == ''){
                $i = $numFilas;
            } else {
                $html.= "<li>$animals[$i]</li>";
            }
            
        }
		
        $html.= "</ul></a></li>";

        echo $html;
    }
}

class MenuNames extends Widget{
    
    public function draw(){
        
        $html = "<li>";
		$html.= "<a href='#click' class='menu'>";
        $html.= "<h2 class='menu-title menu-title_2nd'>names</h2>";
		$html.= "<ul class='menu-dropdown'>";

        $numFilas = count($this->internalData[0]); // numero de filas

        for ($i=0; $i < $numFilas; $i++) { 
            
            $names = $this->internalData[1]; 
            
            if ($names[$i] == ''){
                $i = $numFilas;
            } else {
                $html.= "<li>$names[$i]</li>";
            }
            
        }
		
        $html.= "</ul></a></li>";

        echo $html;
        
    }
}

class MenuThings extends Widget{
    
    public function draw(){
        
        $html = "<li>";
		$html.= "<a href='#click' class='menu'>";
        $html.= "<h2 class='menu-title menu-title_3rd'>things</h2>";
		$html.= "<ul class='menu-dropdown'>";

        $numFilas = count($this->internalData[0]); // numero de filas

        for ($i=0; $i < $numFilas; $i++) { 
            
            $things = $this->internalData[2]; 
            
            if ($things[$i] == ''){
                $i = $numFilas;
            } else {
                $html.= "<li>$things[$i]</li>";
            }
            
        }
		
        $html.= "</ul></a></li>";

        echo $html;
        
    }
}

class MenuMovies extends Widget{
    
    public function draw(){
        
        $html = "<li>";
		$html.= "<a href='#click' class='menu'>";
        $html.= "<h2 class='menu-title menu-title_4th'>movies</h2>";
		$html.= "<ul class='menu-dropdown'>";

        $numFilas = count($this->internalData[0]); // numero de filas

        for ($i=0; $i < $numFilas; $i++) { 
            
            $movies = $this->internalData[3]; 
            
            if ($movies[$i] == ''){
                $i = $numFilas;
            } else {
                $html.= "<li>$movies[$i]</li>";
            }

        }
		
        $html.= "</ul></a></li></ul>";
        
        $html.= "</body></html>";
        echo $html;  

    }
}

