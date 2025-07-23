import React, {useContext, UserContext0} from 'react'; 
import { UserContext } from './ComponetA';
function ComponentD(){  
    const user = useContext(UserContext);
    return ( 
        <div className="box-component">
            <h1>Component D</h1> 
            <h2>{`Bye ${user}`}</h2>
        </div>
    )
}
export default ComponentD