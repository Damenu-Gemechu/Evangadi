import Parent from './Parent';

function GrandParent({ data }) {
	return (
		<div>
			<h1>GrandParent</h1>
			<hr />
			<Parent data={data} />
		</div>
	);
}
export default GrandParent;
