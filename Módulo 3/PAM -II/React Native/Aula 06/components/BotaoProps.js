import React from 'react';
import { TouchableOpacity, Text } from 'react-native';

// props = propriedades,, são os atributos do componentes que eu crio, no exemplo abaixo, eles são o label, corFundo, onPress

const BotaoProps = ({ label, corFundo, msg }) => {
	const botaoStyle = {
		backgroundColor: corFundo,
		padding: 10,
		borderRadius: 5,
	};

	const handlePress = () => {
		console.log(msg);
	};

	return (
		<TouchableOpacity onPress={handlePress} style={botaoStyle}>
			<Text>{label}</Text>
		</TouchableOpacity>
	);
};

export default BotaoProps;
