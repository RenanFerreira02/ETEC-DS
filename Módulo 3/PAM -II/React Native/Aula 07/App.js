import React from 'react';
import { View, Text, Image, ScrollView, TextInput, TouchableOpacity } from 'react-native';
import styled from 'styled-components/native';

const Container = styled.View`
	flex: 1;
	background-color: #999;
	align-items: center;
	justify-content: center;
`;

const LoginPokemon = styled.Image`
	width: 400;
	height: 285;
`;

const Campo = styled.TextInput`
	height: 15px;
	border: solid 1px #aeaeae;
	border-radius: 15px;
	padding: 15px 30px;
	margin: 5px;
`;

const BtnLogin = styled.TouchableOpacity`
	width: 100px;
	padding: 10px;
	border-radius: 5px;
	background-color: #ffff00;
	text-align: center;
`;

const Pokemon = () => {
	return (
		<Container>
			<LoginPokemon source={require('./assets/Pikachu.gif')} />

			<Campo placeholder="E-mail" />

			<Campo placeholder="Senha" secureTextEntry={true} />

			<BtnLogin>
				<Text>Entrar</Text>
			</BtnLogin>
		</Container>
	);
};

export default Pokemon;
