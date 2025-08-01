// Pinos dos LEDs
const int ledVermelho = 8;
const int ledAmarelo = 9;
const int ledVerde = 10;

// Pino do botão
const int botaoPedestre = 2;

// Variáveis para controlar o estado
bool pedestreSolicitado = false;
unsigned long tempoAnterior = 0;
const unsigned long intervaloVerde = 5000;   // 5 segundos de verde para carros
const unsigned long intervaloVermelhoPedestre = 7000; // 7 segundos para atravessar

enum EstadoSemaforo { VERDE, AMARELO, VERMELHO_PEDESTR };
EstadoSemaforo estadoAtual = VERDE;

void setup() {
  pinMode(ledVermelho, OUTPUT);
  pinMode(ledAmarelo, OUTPUT);
  pinMode(ledVerde, OUTPUT);

  pinMode(botaoPedestre, INPUT_PULLUP);  // Usando resistor interno pull-up

  Serial.begin(9600);
}

void loop() {
  // Leia o botão (LOW quando pressionado, por causa do pull-up)
  if (digitalRead(botaoPedestre) == LOW) {
    pedestreSolicitado = true;
    Serial.println("Botao de pedestre pressionado!");
    delay(200);  // debounce simples
  }

  unsigned long tempoAtual = millis();

  switch (estadoAtual) {
    case VERDE:
      digitalWrite(ledVerde, HIGH);
      digitalWrite(ledAmarelo, LOW);
      digitalWrite(ledVermelho, LOW);

      if (tempoAtual - tempoAnterior >= intervaloVerde || pedestreSolicitado) {
        estadoAtual = AMARELO;
        tempoAnterior = tempoAtual;
        pedestreSolicitado = false;  // resetar pedido
      }
      break;

    case AMARELO:
      digitalWrite(ledVerde, LOW);
      digitalWrite(ledAmarelo, HIGH);
      digitalWrite(ledVermelho, LOW);

      if (tempoAtual - tempoAnterior >= 2000) {  // amarelo por 2 seg
        estadoAtual = VERMELHO_PEDESTR;
        tempoAnterior = tempoAtual;
      }
      break;

    case VERMELHO_PEDESTR:
      digitalWrite(ledVerde, LOW);
      digitalWrite(ledAmarelo, LOW);
      digitalWrite(ledVermelho, HIGH);

      if (tempoAtual - tempoAnterior >= intervaloVermelhoPedestre) {
        estadoAtual = VERDE;
        tempoAnterior = tempoAtual;
      }
      break;
  }
}
