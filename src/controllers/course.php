<?php

require_once '../../database/course.php';

function findCourseAction($conn, $id)
{
  $course = findCourseDb($conn, $id);
  if (!isset($course)) {
    return header("Location: ./read.php?message=read-error");
  }
  return $course;
}

function readCourseAction($conn, $search_text)
{
  return readCourseDb($conn, $search_text);
}

function createCourseAction($conn, $title, $description, $image)
{
  $createCourseDb = createCourseDb($conn, $title, $description, $image);
  $message = $createCourseDb == 1 ? 'success-create' : 'error-create';
  return header("Location: ./read.php?message=$message");
}

function updateCourseAction($conn, $id, $title, $description, $image)
{
  $updateCourseDb = updateCourseDb($conn, $id, $title, $description, $image);
  $message = $updateCourseDb == 1 ? 'success-update' : 'error-update';
  return header("Location: ./read.php?message=$message");
}

function deleteCourseAction($conn, $id)
{
  $deleteCourseDb = deleteCourseDb($conn, $id);
  $message = $deleteCourseDb == 1 ? 'success-remove' : 'error-remove';
  return header("Location: ./read.php?message=$message");
}
