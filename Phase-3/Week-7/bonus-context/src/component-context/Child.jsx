// import { Context } from '../App';

// function Child() {
// 	return (
// 		<Context.Consumer>
// 			{x => {
// 				return (
// 					<>
// 						<h3>Child</h3>
// 						<h5> data from app {x} </h5>
// 					</>
// 				);
// 			}}
// 		</Context.Consumer>
// 	);
// }
// export default Child;

import { useAppData } from '../App';

function Child() {
	const x = useAppData();
	function submitHandler(e) {
		e.preventDefault();
		// code ....
	}
	return (
		<>
			{/* <h3>Child</h3>
			<h5> data from app {x} </h5> */}

			<form onSubmit={submitHandler}>
				<input type='text' placeholder='update name' />
				<br />
				<button type='submit'>Change name</button>
			</form>
		</>
	);
}
export default Child;
