
import './App.css';
import Header from './Components/Header';
import Footer from  './Components/Footer';
import Alerts from  './Components/Alerts';
import IpodPro from  './Components/IpodPro';
import MacbookAir from  './Components/MacbookAir';
import IphonePro11 from  './Components/IphonePro11';
import AppleTv from  './Components/AppleTv';
import GLCDC from  './Components/GLCDC';
import AppleCard from  './Components/AppleCard';
import Youtube from './Components/Youtube';
import "./css/bootstrap.css";
import "./css/styles.css";

function App() {
  return (
    <div className="App">
      <Header/>
      <Alerts/>
      <IpodPro/>
      <MacbookAir/>
      <IphonePro11/>
      <GLCDC/>
      <AppleTv/>
      <AppleCard/>
      <Youtube/>
      <Footer/>
      
    
     
    </div>
  );
}

export default App;
