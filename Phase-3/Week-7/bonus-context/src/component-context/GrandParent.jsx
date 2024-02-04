import Parent from './Parent';

function GrandParent() {
	return (
		<div>
			<h1>GrandParent</h1>
			<hr />
			<Parent />
		</div>
	);
}
export default GrandParent;
