# A Hiking/Excursion Safety Manager

A webapp that allows hikers/adventurers who are going into areas with no cell service to set an entry time/location and a return time/location, and notify set users if they do not check in at or before the specified time.

## Problem

Hikers and other adventurers who are going into potentially dangerous wilderness situations often don't have a way to notify others when they become lost or stranded, due to a lack of cell service in such areas.

## Objective

To create a simple webapp that will allow users to specify a location and time of entry, as well as a location and time of return, as well as tagging users that will be notified if they do not check in before the specified return time. This will allow the proper authorities to be notified in dangerous situations.

## Outline

Users will be able to make accounts, and create an "excursion" (app name??) which will include a set departure time/location and a set return time/location.

The user will also be able to tag other users (ex: a wife or parents) in the excursion, and they will be notified if the user does not return before or at the allotted time.

This will allow users to be safer on hiking trips or other adventures into the wilderness.

## User stories

As a hiker, I want to be able to set up an alert that will notify my wife if I don't return from this dangerous section of the forest by 9PM, so that she may call the authorities.

As a parent, I want to be able to receive a notification if my child isn't back from their hike at 7PM, so that I can drive to where they were. Then I want to receive a second notification if they still haven't checked back in by 8PM, so I can contact the park ranger.

## Data

Users will be able to input excursion data: entry location/time, and exit location time. Users will also be able to tag other users to be notified upon return/failure to return. Users can also set series of alerts/alarms with varying degrees of severity.

## Stretch Goals

1. Incorporate map data that will attach the phone number/contact info for the proper local authorities to each excursion. That way, if a user misses their return time, the tagged support users will be able to contact the right people.

2. Allow for multiple "levels" of notification (ie. a warning if the person on the excursion doesn't make it back at the right time, and a severe warning if they still aren't back an hour later).

## Design

Has to be as simple and paired down as possible so that load times on the pages are minimal (in case cell/internet service is available but limited).

Should have easy to read alerts, quick navigation.

## Directories

Ideally, a simple combination of DIST and SRC directories, each containing html, css, and js files. This will necessitate the use of some tooling (compilers especially). The deployment process will also have to involve something like heroku that will allow for a more complex file hierarchy.


## Wireframe

Not yet decided.
