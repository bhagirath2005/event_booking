<?php include "nav.php"; ?>
<!-- Main content -->
<div class="content">
  <h2>Add New Event</h2>
  <form action="insert_event.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Event Title</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city" required>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea class="form-control" id="address" name="address" rows="2" required></textarea>
    </div>

    <div class="mb-3">
      <label for="date" class="form-label">Date</label>
      <input type="date" class="form-control" id="date" name="date" required>
    </div>

    <div class="mb-3">
      <label for="seats" class="form-label">Total Seats</label>
      <input type="number" class="form-control" id="seats" name="seats" required>
    </div>

    <div class="mb-3">
      <label for="available_seats" class="form-label">Available Seats</label>
      <input type="number" class="form-control" id="available_seats" name="available_seats" required>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Ticket Price (₹)</label>
      <input type="number" class="form-control" id="price" name="price" step="0.01" required>
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-select" name="category" id="category" required>
        <option value="">Select Category</option>
        <option value="Music">Music</option>
        <option value="Workshop">Workshop</option>
        <option value="Seminar">Seminar</option>
        <option value="Sports">Sports</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" name="status" id="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Event Image</label>
      <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Add Event</button>
  </form>
</div>
