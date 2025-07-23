import ComponentD from "./ComponetD" 
import React, {useContext} from "react"
import { UserContext } from "./ComponetA"
function ComponentC(){  
    const user = useContext(UserContext)
    return ( 
        <div className="box-component">
            <h1>Component C</h1>  
            <h2>{user}</h2>
            <ComponentD/>
        </div>
    )
}
export default ComponentC