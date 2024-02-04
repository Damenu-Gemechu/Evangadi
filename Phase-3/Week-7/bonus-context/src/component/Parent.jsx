import Child from './Child';

function Parent({ data }) {
	return (
		<div>
			<h2>Parent</h2>
			<hr />
			<Child data={data} />
		</div>
	);
}
export default Parent;
