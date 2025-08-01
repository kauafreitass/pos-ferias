// Define os pinos digitais para cada LED
const int ledVermelho = 2;
const int ledAmarelo = 3;
const int ledVerde = 4;

// A função 'setup' é executada apenas uma vez quando o Arduino é ligado ou reiniciado
void setup() {
  // Configura cada pino como uma saída para controlar o LED
  pinMode(ledVermelho, OUTPUT);
  pinMode(ledAmarelo, OUTPUT);
  pinMode(ledVerde, OUTPUT);
}

// A função 'loop' é executada repetidamente para sempre
void loop() {
  // Acende o LED vermelho
  digitalWrite(ledVermelho, HIGH);
  delay(1000); // Espera 1 segundo (1000 milissegundos)

  // Apaga o LED vermelho e acende o amarelo
  digitalWrite(ledVermelho, LOW);
  digitalWrite(ledAmarelo, HIGH);
  delay(1000); // Espera 1 segundo

  // Apaga o LED amarelo e acende o verde
  digitalWrite(ledAmarelo, LOW);
  digitalWrite(ledVerde, HIGH);
  delay(1000); // Espera 1 segundo

  // Apaga o LED verde para reiniciar a sequência
  digitalWrite(ledVerde, LOW);
  delay(500); // Um pequeno intervalo antes de recomeçar
}