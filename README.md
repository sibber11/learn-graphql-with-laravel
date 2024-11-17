# Project Idea: "Event Management System" (Laravel + Vue)

## Project Overview
An Event Management System where users can register, manage events, and receive real-time notifications. This system will leverage Laravel for the backend and Vue.js for the frontend.

### Project Features Breakdown
User Authentication (Laravel Sanctum)

User registration and login (using Sanctum).
Role-based access: Admin, Organizer, Attendee.
Event Management (GraphQL)

### Admin/Organizer:
Create, update, delete events.
Event attributes: title, description, date, time, location, max attendees.

### User:
Browse and search events (with pagination).
Register for an event if slots are available.
GraphQL API Implementation (Lighthouse)

### Queries:
Get all events.
Get event by ID.

### Mutations:
Create, update, delete events (admin only).
Register for an event.

### Subscriptions:
Real-time notifications for new events and registration updates.
Frontend (Vue + Apollo Client)

### Event List Component:
Display all events using a GraphQL query.

### Event Registration Component:
Form for users to register for events.
Dashboard for Admin/Organizers:
Manage events and view attendee lists.

### Real-time Updates:
Use Vue Apollo to handle subscriptions for event notifications.
