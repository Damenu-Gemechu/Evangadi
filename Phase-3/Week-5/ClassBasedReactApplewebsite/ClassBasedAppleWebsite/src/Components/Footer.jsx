import { Component } from "react"
import flagIcon from "../images/icons/16.png"
import PropsFooter from "./PropsFooter"

class Footer extends Component {
	render(){
  return (
    <footer class="footer-wrapper">
		<div class="container"> 
			<div class="upper-text-container">
                <br/><br/><br/>
				<p>1. Trade In: Trade‑in values vary. iPhone 11 and iPhone 11 Pro promotional pricing is after trade‑in of iPhone 8 Plus and iPhone X in good condition. Additional trade‑in values require purchase of a new iPhone, subject to availability and limits. Must be at least 18. Apple or its trade-in partners reserve the right to refuse or limit any Trade In transaction for any reason. In‑store trade‑in requires presentation of a valid, government-issued photo ID (local law may require saving this information). Sales tax may be assessed on full value of new iPhone. Additional terms from Apple or Apple’s trade-in partners may apply. Monthly pricing: Available to qualified customers and requires 0% APR, 24-month installment loan with Citizens One or Apple Card Monthly Installments and iPhone activation with AT&T, Sprint, T-Mobile, or Verizon. Taxes and shipping not included. Additional Apple Card Monthly Installments terms are in the <a href="https://www.goldmansachs.com/terms-and-conditions/Apple-Card-Customer-Agreement.pdf" target="_blank"> Customer Agreement</a>. Additional iPhone Payments terms are <a href="https://www.apple.com/legal/sales-support/iphoneinstallments_us/"> here</a>.</p>
				<p>2. Subscription required.<br/><br/>
				Magic Keyboard sold separately.<br/><br/>
				Apple TV+ is $4.99/month after free trial. One subscription per Family Sharing group. Offer good for 3 months after eligible device activation. Plan automatically renews until cancelled. Restrictions and other <a href="https://www.apple.com/promo/">terms </a> apply.</p>
			</div>
			<div class="footer-links-wrapper row"> 
				<div class="links-wrapper-1 col-sm-12 col-md">
					<h3>Shop and Learn</h3>
					<ul>
						<PropsFooter href={"#"} link={"Mac"}/>
						<PropsFooter href={"#"} link={"iPad"}/>
						<PropsFooter href={"#"} link={"iPhone"}/>
						<PropsFooter href={"#"} link={"Watch"}/>
						<PropsFooter href={"#"} link={"TV"}/>
						<PropsFooter href={"#"} link={"Music"}/>
						<PropsFooter href={"#"} link={"AirPods"}/>
						<PropsFooter href={"#"} link={"HomePod"}/>
						<PropsFooter href={"#"} link={"iPod touch"}/>
						<PropsFooter href={"#"} link={"Accessories"}/>
						<PropsFooter href={"#"} link={"Gift Cards"}/>
						
					</ul>
				</div> 
				<div class="links-wrapper-2 col-sm-12 col-md">
					<h3>Services</h3>
					<ul>
					<PropsFooter href={"#"} link={"Apple Music"}/>
						<PropsFooter href={"#"} link={"Apple News+"}/>
						<PropsFooter href={"#"} link={"Apple TV+"}/>
						<PropsFooter href={"#"} link={"Apple Arcade"}/>
						<PropsFooter href={"#"} link={"Apple Card"}/>
						<PropsFooter href={"#"} link={"iCloud"}/>
					</ul>
					<h3>Account</h3>
					<ul>
					    <PropsFooter href={"#"} link={"Manage Your Apple ID"}/>
						<PropsFooter href={"#"} link={"Apple Store Account"}/>
						<PropsFooter href={"#"} link={"iCloud.com"}/>

					</ul>					
				</div> 
				<div class="links-wrapper-3 col-sm-12 col-md">
					<h3>Apple Store</h3>
					<ul>
					    <PropsFooter href={"#"} link={"Find a Store"}/>
						<PropsFooter href={"#"} link={"Genius Bar"}/>
						<PropsFooter href={"#"} link={"Today at Apple"}/>
						<PropsFooter href={"#"} link={"Apple Camp"}/>
						<PropsFooter href={"#"} link={"Field Trip"}/>
						<PropsFooter href={"#"} link={"Apple Store App"}/>
						<PropsFooter href={"#"} link={"Refurbished and Clearance"}/>
						<PropsFooter href={"#"} link={"Financing"}/>
						<PropsFooter href={"#"} link={"Apple Trade In"}/>
						<PropsFooter href={"#"} link={"Order Status"}/>
						<PropsFooter href={"#"} link={"Shopping Help"}/>
						
					</ul>
				</div>  
				<div class="links-wrapper-4 col-sm-12 col-md">
					<h3>For Business</h3>
					<ul>
					<PropsFooter href={"#"} link={"Apple and Business"}/>
					<PropsFooter href={"#"} link={"Shop for Business"}/>
					</ul>		
					<h3>For Education</h3>
					<ul>
					<PropsFooter href={"#"} link={"Apple and Education"}/>
					<PropsFooter href={"#"} link={"Shop for College"}/>
						
					</ul>
					<h3>For Healthcare</h3>
					<ul>
						<PropsFooter href={"#"} link={"Manage Your Apple ID"}/>
						<PropsFooter href={"#"} link={"Apple Store Account"}/>
						<PropsFooter href={"#"} link={"iCloud.com"}/>					
					</ul>	
					<h3>For Government</h3>
					<ul>
					    <PropsFooter href={"#"} link={"Apple and Education"}/>
						<PropsFooter href={"#"} link={"Shop for College"}/>
					</ul>
				</div> 
				<div class="links-wrapper-5 col-sm-12 col-md">
					<h3>Apple Values</h3>
					<ul>
					    <PropsFooter href={"#"} link={"Find a Store"}/>
						<PropsFooter href={"#"} link={"Genius Bar"}/>
						<PropsFooter href={"#"} link={"Today at Apple"}/>
						<PropsFooter href={"#"} link={"Apple Camp"}/>
						<PropsFooter href={"#"} link={"Field Trip"}/>
						<PropsFooter href={"#"} link={"Apple Store App"}/>
					</ul>
					<h3>About Apple</h3>
					<ul>
					    <PropsFooter href={"#"} link={"Find a Store"}/>
						<PropsFooter href={"#"} link={"Genius Bar"}/>
						<PropsFooter href={"#"} link={"Today at Apple"}/>
						<PropsFooter href={"#"} link={"Apple Camp"}/>
						<PropsFooter href={"#"} link={"Field Trip"}/>
						<PropsFooter href={"#"} link={"Apple Store App"}/>
					</ul>						
				</div> 
			</div>
			<div class="my-apple-wrapper"> 
				More ways to shop: <a href="#">Find an Apple Store</a> or <a href="#">other retailer</a> near you. Or call 1-800-MY-APPLE.
			</div>
			<div class="copyright-wrapper row">
				<div class="copyright col-sm-12 order-2 col-md-8 order-md-1 col-lg-4 order-lg-1">
					Copyright &copy; 2020 Apple Inc. All rights reserved.
				</div>
				<div class="footer-links-terms  col-sm-12 order-3 col-lg-6 order-lg-2">
					<ul>
					    <PropsFooter href={"#"} link={"Privacy Policy"}/>
						<PropsFooter href={"#"} link={"Terms of Use"}/>
						<PropsFooter href={"#"} link={"Sales and Refunds"}/>
						<PropsFooter href={"#"} link={"Legal"}/>
						<PropsFooter href={"#"} link={"Site Map"}/>
					</ul>
				</div>
				<div class="footer-country  col-sm-12 order-1 col-md-4 order-md-2 text-md-right col-lg-2 order-lg-3">
					<div class="flag-wrapper"><img src={flagIcon}/></div> <div class="footer-country-name">United States</div> 
				</div>
			</div>
		</div>
	</footer>

  )
}
}

export default Footer