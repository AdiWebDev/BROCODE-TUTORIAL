import ComponentC from "./ComponetC"

function ComponentB(){ 
    return ( 
        <div className="box-component">
            <h1>Component B</h1>
            
            <ComponentC />
        </div>
    )
}
export default ComponentB