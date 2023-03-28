import React from 'react'; // Importa a biblioteca React para usar o React - Native
import { View, StyleSheet } from 'react-native'; //Importação da biblioteca React - Native
import BotaoProps from './components/BotaoProps.js';

// View é para visualização mas serve como div

const App = () => {
	return (
		<View style={styles.container}>
			<BotaoProps label="Botão" corFundo="#006970" msg={'Uepa'} />
		</View>
	);
};

const styles = StyleSheet.create({
	container: {
		flex: 1,
		justifyContent: 'center',
		alignItems: 'center',
	},
});

// JSON - JavaScript Object Notation: Uma forma de representar objetos utilizando JavaScript

export default App;
