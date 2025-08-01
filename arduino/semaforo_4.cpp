// Define os pinos digitais para cada LED
const int ledVermelho = 2;
const int ledAmarelo = 3;
const int ledVerde = 4;

// Variável para armazenar o tempo inicial
unsigned long tempoInicial = 0;
bool ledsLigados = true;

void setup() {
  pinMode(ledVermelho, OUTPUT);
  pinMode(ledAmarelo, OUTPUT);
  pinMode(ledVerde, OUTPUT);

  tempoInicial = millis(); // marca o tempo em que o Arduino iniciou o loop
}

void loop() {
  if (ledsLigados) {
    // Sequência de LEDs
    digitalWrite(ledVermelho, HIGH);
    delay(1000);

    digitalWrite(ledVermelho, LOW);
    digitalWrite(ledAmarelo, HIGH);
    delay(1000);

    digitalWrite(ledAmarelo, LOW);
    digitalWrite(ledVerde, HIGH);
    delay(1000);

    digitalWrite(ledVerde, LOW);
    delay(500);

    // Verifica se 10 segundos já se passaram desde o início
    if (millis() - tempoInicial >= 10000) {
      // Apaga todos os LEDs
      digitalWrite(ledVermelho, LOW);
      digitalWrite(ledAmarelo, LOW);
      digitalWrite(ledVerde, LOW);

      ledsLigados = false;  // para que a sequência não continue após apagar
    }
  }
}
