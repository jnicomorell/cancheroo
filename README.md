# cancheroo
Cancheroo es una app para reserva de canchas de padel o futbol.

La app deberá tener una combinación de funcionalidades prácticas, experiencia fluida y características específicas que respondan a lo que más busca la gente. Acá te dejo un listado de lo que generalmente busca un usuario al reservar una cancha:

1. Búsqueda rápida y sencilla
Filtro por deporte (fútbol, pádel, etc.)

Filtro por ubicación (cerca de mí, barrio, ciudad)

Filtro por día y horario disponibles

Filtro por tipo de cancha (césped sintético, techada, abierta, etc.)

2. Información clara de las canchas
Fotos de las instalaciones

Ubicación con mapa

Horarios disponibles actualizados en tiempo real

Precio por hora

Características (iluminación, estacionamiento, vestuarios, pelotas incluidas, etc.)

3. Proceso de reserva simple
Calendario con horarios disponibles

Opción de reservar con anticipación o en el momento

División del costo entre participantes (opcional pero muy valorado)

Confirmación instantánea

4. Métodos de pago flexibles
Pago online (MercadoPago, tarjeta, billeteras virtuales)

Pago en efectivo en el lugar

Opción de pagar individualmente cada jugador

5. Gestión de reservas
Historial de reservas

Cancelación o modificación

Reprogramación fácil

Notificaciones (recordatorios, cambios de clima, cancelaciones)

6. Registro y gestión de jugadores
Crear grupos de juego o equipos

Invitar a amigos a una reserva

Confirmar asistencia de los jugadores

7. Opiniones y valoraciones
Calificaciones de canchas y clubes

Comentarios de otros usuarios

8. Programas de fidelidad
Sistema de puntos o descuentos por reservas frecuentes

Promos especiales en días de baja demanda

9. Sección para torneos o eventos
Inscripción a torneos locales

Información sobre competencias o ligas

10. Panel de administración para clubes
(esto lo ven los dueños de canchas, no los jugadores)

Gestión de horarios

Confirmación de pagos en efectivo

Administración de precios y disponibilidad

Estadísticas y reportes

11. Sistema de resevas recurrentes
Para equipos que juegan siempre el mismo día y hora.

Configurar reservas semanales automáticas.

12. Clima en tiempo real
Mostrar si va a llover y cómo afecta a canchas al aire libre.

Enviar alerta si el clima cambia cerca del horario de juego.

13. Geolocalización avanzada
“Buscar canchas cerca de mi ubicación actual”

“Rutas para llegar” integradas con Google Maps o Waze

14. Chat o notificaciones entre jugadores
Coordinación del partido desde la app

Avisar si alguien cancela o se suma un reemplazo

15. Lista de espera
Si una cancha está ocupada, permitir anotarse en una lista de espera.

Notificación automática si se libera el horario.

16. Ranking de jugadores o equipos (gamificación)
Puntuar a jugadores por asistencia, organización o juego limpio

Crear ligas informales, con stats, goleadores, etc.

17. Integración con redes sociales
Compartir partidos jugados, fotos del grupo, resultados o torneos

Opción de login con Google, Apple o Facebook

18. Integración con calendario personal
Agregar reservas al Google Calendar o Apple Calendar

Sincronización automática

19. Servicio de alquiler extra
Alquilar pelotas, conos, pecheras o árbitros desde la app

Contratar fotógrafo o filmación de partidos

20. Notificaciones inteligentes
"Hay un horario libre mañana a la misma hora que reservaste la semana pasada"

“Promo disponible en tu cancha favorita hoy a las 19h”

21. Multilenguaje y multidivisa
Si pensás expandirte o hay extranjeros en tu zona, esto suma mucho.


## Development setup

1. **Clone the repository and start DDEV**

```bash
git clone <repository-url>
cd cancheroo
ddev start
```

2. **Install PHP dependencies and run migrations inside DDEV**

```bash
ddev composer install
ddev exec php artisan migrate
```

3. **Install Node/React Native dependencies**

```bash
# From the React Native directory
npm install
```

4. **Run the React Native app**

```bash
npx react-native start
# in another terminal
npx react-native run-android # or run-ios
```

The Laravel backend will be available at `http://cancheroo.ddev.site` while React Native runs on the host.

### Using Artisan inside DDEV

Use the PHP container for Artisan commands:

```bash
ddev exec php artisan <command>
```

For example, to create tables:

```bash
ddev exec php artisan migrate
```

### Environment variables

Create a `.env` file in the Laravel project and set values such as:

```
APP_KEY=
DB_HOST=db
DB_DATABASE=db
DB_USERNAME=db
DB_PASSWORD=db
```

After installing dependencies you can run:

```bash
ddev exec php artisan key:generate
```

If your React Native app needs to reach the API, create an `.env` file there with `API_URL=http://cancheroo.ddev.site` and any other secrets (API keys, third-party tokens, etc.).
