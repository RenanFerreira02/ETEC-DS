import React from 'react';
import { View, Text, Image, ScrollView, TextInput } from 'react-native';

const Pokemon = () => {
	return (
		<ScrollView>
			<View>
				<Text
					style={{
						fontsize: 45,
						alignself: 'Center',
						color: 'Green',
					}}
				></Text>

				<Image
					style={{ width: 200, height: 210, alignSelf: 'Center' }}
					source={require('./assets/ditto.png')}
				/>
			</View>

			<TextInput
				style={{
					height: 40,
					borderColor: 'gray',
					borderWidth: 1,
					padding: 5,
					margin: 15,
				}}
				defaultValue="DIGITAA"
			/>
		</ScrollView>
	);
};

export default Pokemon;
