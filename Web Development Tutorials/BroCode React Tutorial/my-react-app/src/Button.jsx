
function Button(){  
    // let count = 0; 

    // const handleClick  = (name) => {  
        
    //     if(count < 3){  
    //         count++;
    //         console.log(`${name} you clicked me ${count} time/s`);  
    //     } else { 
    //         console.log(`${name} Stop Clicking me`);
    //     }
    // }

    // return (
    //     <button 
    //         onClick={() => handleClick('Adi')} 
    //         className="button">
    //         Click me
    //     </button>
    // );  

    const handleClick = (e) => e.target.textContent = "OUCH!"; 
    return(<button onClick={(e) => handleClick(e)}>Click Me</button>);
} 

export default Button;
