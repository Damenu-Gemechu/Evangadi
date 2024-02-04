import puppy1 from '../images/puppy-1.jpg'
import puppy2 from '../images/puppy-2.jpg'
import "../css/bootstrap.css"
import '../css/style.css'
function Section2() {
  return (
     <section className="container">
    <div className="row">
      <div className="col-md-4 mb-md-0">
        <img src={puppy1} alt="" />
      </div>
      <div className="d-none d-md-block col-md-4 missing px-5 pt-5">
        <p className="text-center fw-bold">Puppy missing here!!</p>
      </div>
      <div className="mt-md-0 col-md-4 mt-5">
        <img src={puppy2} alt="" />
      </div>
    </div>
  </section>
  )
}

export default Section2