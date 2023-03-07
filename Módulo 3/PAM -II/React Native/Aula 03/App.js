import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';

import { Card } from 'react-native-paper';

import cardComponent from './components/cardComponent';

export default function App() {
  return (
    <View style={styles.container}>
      <Text>Olá mundo!</Text>
      <card>
        <cardComponent/>
      </card>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#006989',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
