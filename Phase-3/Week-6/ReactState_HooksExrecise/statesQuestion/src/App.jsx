import { useState } from 'react'
import MyCounter from './Components/MyCounter';
import IncreaseDecreaseCount from './Components/IncreaseDecreaseCount';
import UseEffectForTitle from './Components/UseEffectForTitle';
import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <div className='dam'>
     <MyCounter />
      <IncreaseDecreaseCount/>
      <UseEffectForTitle/>
    </div>
  )
}

export default App
