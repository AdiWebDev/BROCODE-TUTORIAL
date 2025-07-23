import React, {useState} from "react";



function BaconAvocado(){ 
 const [text, setText] = useState ("Bacon Avocado")
function handleHovenOn(){
 setText("I miss you");
}

function handleHovenOff(){
 setText("Bacon Avocado");
}

return( 
    <div className="bacon-container">
    < p className="bacon-display" onMouseEnter={handleHovenOn} onMouseLeave={handleHovenOff}>
     {text}
    </p>

    </div>
    
)
} 



export default BaconAvocado