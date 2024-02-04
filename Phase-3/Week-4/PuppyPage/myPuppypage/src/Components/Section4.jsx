import puppy3 from '../images/puppy-3.jpg'
import puppy4 from '../images/puppy-4.jpg'

function Section4() {
  return (
    <section className="container">
    <div className="row">
      <div className="mb-5 col-md-6 mb-md-0">
        <img src={puppy3} alt="" />
      </div>
      <div className="col-md-6">
        <img src={puppy4} alt="" />
      </div>
    </div>
  </section>
  )
}

export default Section4