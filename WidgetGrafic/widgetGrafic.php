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

class Grafic extends Widget{
    
    public function draw(){

        $html = "<html><head>";
        $html.= "<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>";
        $html.= "</head><body>";
		$html.= "<div style='width: 1000px; height: 1000px;'><canvas id='myChart'></canvas></div>";
		$html.= "<script>
                    const ctx = document.getElementById('myChart');                    
                    const data = {
                        labels: [";

        $numFilas1 = count($this->internalData[0]); // numero de filas

        for ($i=0; $i < $numFilas1; $i++) { 
            
            $labels = $this->internalData[0]; 

            $html.= "'$labels[$i]',";
            
        }

        $html.= "],
            datasets: [{
                label: 'My First Dataset',
                data: [";
		
        $numFilas2 = count($this->internalData[0]); // numero de filas

        for ($i=0; $i < $numFilas2; $i++) { 
    
            $datas = $this->internalData[1]; 

            $html.= "$datas[$i],";
            
        }
        
        $html.= "],
            backgroundColor: [";

        $numFilas3 = count($this->internalData[0]); // numero de filas

        for ($i=0; $i < $numFilas3; $i++) { 

            $bgColors = $this->internalData[2]; 

            $html.= "'$bgColors[$i]',";
            
        }
    


        $html.= "],
            hoverOffset: 4
            }]
        };

        new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: false,
                maintainAspectRatio: false,
            }
        });
        </script>
        </body></html>";
        echo $html;  
    }
}

