# jQuery Nao Calendar
Responsive calendar plugin for jQuery web applications.
This plugin has a few dependencies, so it is recommended to use if you are already using those dependencies in your project.

## Dependencies
- jQuery
- jQuery Pseudo Ripple (By me)
- Aicon icon set (by me)

## Demo
[Live demo](https://naeemur.github.io/jquery-nao-calendar/)

## Simple use
```
// HTML
<div class="calendar-1"></div>
// JS
$('.calendar-1').calendar()
```

## Styling with CSS
```
// HTML
<div class="calendar-2"></div>
// css
.calendar-2.nao-month td {
  padding: 20px;
}
.calendar-2 .month-head&gt;div,
.calendar-2 .month-head&gt;button {
  padding: 20px;
}
// JS
$('.calendar-2').calendar()
```

## API usage
```
// HTML
<div class="calendar-3"></div>
// css
.calendar-3.nao-month td {
  padding: 15px;
}
.calendar-3 .month-head&gt;div,
.calendar-3 .month-head&gt;button {
  padding: 15px;
}
// JS
$('.calendar-3').calendar({
  date: new Date(),
  autoSelect: true, // false by default
  select: function(date) {
    console.log('SELECT', date)
  },
  toggle: function(y, m) {
    console.log('TOGGLE', y, m)
  }
})
```

## License
The MIT License (MIT)

Copyright (c) 2019 Md. Naeemur Rahman (https://naeemur.github.io)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
