import GrandParent from './component-context/GrandParent';
import { createContext, useContext, useState } from 'react';

const Context = createContext();

function App() {
	const [name, setname] = useState('name');

	return (
		<Context.Provider value={'some data'}>
			<h1 style={{ backgroundColor: 'gray' }}>{name}</h1>
			<GrandParent />
		</Context.Provider>
	);
}
export default App;

export function useAppData() {
	return useContext(Context);
}
