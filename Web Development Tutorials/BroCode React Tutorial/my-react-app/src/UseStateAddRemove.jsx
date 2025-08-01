import React, {useState} from 'react'; 



function AddRemove(){ 
    const [foods, setFoods] =  useState(["Apple", "Orange", " Banana"]) 

    function handleAddFood(){ 
    const newFood = document.getElementById("foodInput").value;  
                    document.getElementById("foodInput").value ="";
    setFoods([...foods, newFood]); 
    } 

    function handleRemoveFodd(index){
     setFoods(foods.filter((_, i) => i !== index));
    } 


    
return (
    <div>
        <h2>List of Food</h2> 
        <ul>
            {foods.map((food,index)=>
            <li key ={index} onClick={()=> handleRemoveFodd(index)}> {food}</li>)}
        </ul> 

        <input type="text" id="foodInput" placeholder='Enter food name' /> 
        <button onClick={handleAddFood}>Add Food</button> 
    

    </div>
) 


} 






export default AddRemove;