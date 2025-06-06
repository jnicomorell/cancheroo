# Backend tasks

The existing `backend` directory is an empty Laravel skeleton. Use it to implement the API.

## Setup
- [ ] Install Composer dependencies (`composer install`)
- [ ] Create a `.env` file and run `php artisan key:generate`
- [ ] Configure database connection and run migrations

## Features
1. **Search and filters**
   - [ ] Endpoint to search available fields filtered by sport, location, day/time and field type
2. **Field information**
   - [ ] Return photos, map location, real‑time schedule, price and amenities
3. **Booking flow**
   - [ ] Calendar with free slots
   - [ ] Allow booking in advance or last minute
   - [ ] Optional cost split between participants and instant confirmation
4. **Payments**
   - [ ] Integrate MercadoPago or similar
   - [ ] Support cash payments and individual player payments
5. **Reservation management**
   - [ ] Reservation history
   - [ ] Cancel, reschedule or modify
   - [ ] Notifications for reminders, weather changes and cancellations
6. **Players and teams**
   - [ ] Create groups or teams
   - [ ] Invite friends and confirm attendance
7. **Ratings**
   - [ ] Allow users to rate fields and clubs
   - [ ] Store textual reviews
8. **Loyalty program**
   - [ ] Points/discounts for frequent bookings
   - [ ] Promotions for low demand days
9. **Tournaments/events**
   - [ ] Allow users to sign up for tournaments and leagues
10. **Club admin panel**
    - [ ] Manage schedules, prices and availability
    - [ ] Confirm offline payments
    - [ ] Generate statistics and reports
11. **Recurring reservations**
    - [ ] Weekly automatic bookings for regular teams
12. **Weather integration**
    - [ ] Show rain forecast and send alerts if weather changes
13. **Geolocation**
    - [ ] Search by current location
    - [ ] Provide routes via Google Maps or Waze
14. **Chat/notifications**
    - [ ] Basic chat or push notifications between players
15. **Wait list**
    - [ ] Allow players to join a wait list when a field is occupied and notify when free
16. **Player ranking/gamification**
    - [ ] Track attendance or fair play and compute league stats
17. **Social login**
    - [ ] Login with Google/Apple/Facebook and allow sharing results
18. **Calendar integration**
    - [ ] Sync bookings to Google Calendar or Apple Calendar
19. **Extra rentals**
    - [ ] Rent balls, bibs, referees, or other services
20. **Smart notifications**
    - [ ] Suggest available times or promotions based on past behaviour
21. **Multi language and currency**
    - [ ] API responses support multiple languages and currencies

Add tests for any new functionality. Run `composer test` before committing.
