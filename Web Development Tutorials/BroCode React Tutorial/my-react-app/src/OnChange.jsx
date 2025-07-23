import React, { useState } from "react";

function OnChange(){ 
    const [name, setName] = useState("Guest"); 
    const [quantity, setQuantity] = useState(0);  
    const [payment, setPayment] = useState("");
    const [shipping, setShip] = useState("Delivery");
    function handleNameChange(event){ 
        setName(event.target.value);
    }
    function handleQuantityChange(event){ 
        setQuantity(event.target.value);
    }
    function handlePaymentChange(event){ 
        setPayment(event.target.value);
    }
    function handleShippingChange(event){ 
        setShip(event.target.value);
    }
    return(
        <div>
            <input value={name} onChange={handleNameChange} /> 
            <p>Name: {name}</p> 

             <input value={quantity} onChange={handleQuantityChange} /> 
            <p>Quantity: {quantity}</p> 

            <select value={payment} onChange={handlePaymentChange}>
                <option value="">Select an option</option> 
                <option value="Visa">Visa</option>
                <option value="MasterCard">MasterCard</option>
            </select> 
            <p>Card: {payment}</p> 

         <input type="radio" name="ship" value="Pick Up" id="pickup"
                checked={shipping === "Pick Up"}
                onChange={handleShippingChange}/> 

        <label htmlFor="pickup">Pick Up </label>
        <br /> 

        <input  type="radio" name="ship" value="Delivery"  id="delivery" 
                checked={shipping === "Delivery"}
                 onChange={handleShippingChange}/> 
           <label htmlFor="delivery">Delivery</label>
             <p>Shipping: {shipping}</p>
        </div>
    )
} 

export default OnChange