
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
d
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
s
c
r
i
p
t
i
o
n
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
t
e
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
e
u
_
c
o
u
n
t
r
y
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
r
r
o
r
 
=
 
n
u
l
l
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
d
'
]
 
=
 
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
c
o
d
e
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
r
a
t
e
'
]
 
=
 
0
.
0
0
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
]
 
=
 
0
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
A
l
l
T
a
x
R
a
t
e
s
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
A
l
l
T
a
x
R
a
t
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


	
	
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;


	
	
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
`
i
d
`
,
`
c
o
d
e
`
,
`
d
e
s
c
r
i
p
t
i
o
n
`
,
`
r
a
t
e
`
,
`
i
s
_
e
u
_
c
o
u
n
t
r
y
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
t
a
x
r
a
t
e
s
'
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;


	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

	
	
	
	
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
i
d
'
 
]
 
=
 
$
r
-
>
i
d
;

	
	
	
	
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
c
o
d
e
'
 
]
 
=
 
$
r
-
>
c
o
d
e
;

	
	
	
	
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
 
=
 
$
r
-
>
d
e
s
c
r
i
p
t
i
o
n
;

	
	
	
	
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
r
a
t
e
'
 
]
 
=
 
$
r
-
>
r
a
t
e
;

	
	
	
	
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
 
]
 
=
 
$
r
-
>
i
s
_
e
u
_
c
o
u
n
t
r
y
;

	
	
	
}

	
	
}

 

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
a
t
h
e
r
_
d
a
t
a
(
$
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
d
 
=
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
[
'
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
o
d
e
 
=
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
[
'
c
o
d
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
s
c
r
i
p
t
i
o
n
 
=
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
a
t
e
 
=
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
[
'
r
a
t
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
e
u
_
c
o
u
n
t
r
y
 
=
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
[
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
N
o
 
T
a
x
 
R
a
t
e
s
 
w
e
r
e
 
f
o
u
n
d
 
w
i
t
h
 
i
d
 
'
.
$
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
T
a
x
R
a
t
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
d
'
]
 
<
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
t
a
x
r
a
t
e
s

	
	
	
	
(

	
	
	
	
`
c
o
d
e
`
,

	
	
	
	
`
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
`
r
a
t
e
`
,

	
	
	
	
`
i
s
_
e
u
_
c
o
u
n
t
r
y
`

	
	
	
	
)

	
	
	
	
V
A
L
U
E
S

	
	
	
	
(

	
	
	
	
'
"
.
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
c
o
d
e
'
]
.
"
'
,

	
	
	
	
'
"
.
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
.
"
'
,

	
	
	
	
"
 
.
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
r
a
t
e
'
]
.
'
,

	
	
	
	
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
]
.
'

	
	
	
	
)
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
d
'
]
 
=
 
$
r
e
s
u
l
t
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
T
a
x
 
R
a
t
e
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
T
a
x
 
R
a
t
e
 
a
l
r
e
a
d
y
 
a
v
a
i
l
a
b
l
e
.
 
A
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
 
a
r
e
 
c
r
e
a
t
i
n
g
 
a
 
n
e
w
 
T
a
x
 
r
a
t
e
?
'
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
o
m
m
i
t
U
p
d
a
t
e
T
a
x
R
a
t
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
d
'
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
t
a
x
r
a
t
e
s
 
S
E
T

	
	
	
	
	
	
	
`
c
o
d
e
`
 
=
 
'
"
.
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
c
o
d
e
'
]
.
"
'
,

	
	
	
	
	
	
	
`
d
e
s
c
r
i
p
t
i
o
n
`
 
=
 
'
"
.
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
.
"
'
,

	
	
	
	
	
	
	
`
r
a
t
e
`
 
=
 
"
.
(
f
l
o
a
t
)
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
r
a
t
e
'
]
.
'
,

	
	
	
	
	
	
	
`
i
s
_
e
u
_
c
o
u
n
t
r
y
`
 
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
]
.
'
 

	
	
	
	
	
	
W
H
E
R
E
 
`
i
d
`
 
=
 
'
 
.
(
i
n
t
)
 
$
t
h
i
s
-
>
t
m
p
_
t
a
x
r
a
t
e
[
'
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
T
a
x
 
R
a
t
e
 
c
o
u
l
d
 
n
o
t
 
b
e
 
f
o
u
n
d
 
a
f
t
e
r
 
a
p
p
a
r
e
n
t
 
s
u
c
c
e
s
s
f
u
l
 
i
n
s
e
r
t
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
o
f
 
T
a
x
 
R
a
t
e
 
t
o
 
b
e
 
u
p
d
a
t
e
d
 
i
s
 
0
'
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
T
a
x
R
a
t
e
(
$
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
D
E
L
E
T
E
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
t
a
x
r
a
t
e
s
 
W
H
E
R
E
 
`
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
[
$
i
d
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
C
o
u
l
d
 
n
o
t
 
d
e
l
e
t
e
 
t
a
x
 
r
a
t
e
 
w
i
t
h
 
i
d
 
'
.
$
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
I
D
 
'
.
$
i
d
.
'
 
o
f
 
T
a
x
 
R
a
t
e
 
n
o
t
 
a
v
a
i
l
a
b
l
e
'
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
A
l
l
T
a
x
R
a
t
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
T
R
U
N
C
A
T
E
 
T
A
B
L
E
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
t
a
x
r
a
t
e
s
'
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
I
n
s
e
r
t
S
q
l
(
$
q
u
e
r
y
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
C
o
u
l
d
 
n
o
t
 
e
m
p
t
y
 
t
a
x
 
r
a
t
e
s
 
t
a
b
l
e
.
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
m
a
k
e
T
a
x
r
a
t
e
s
D
r
o
p
d
o
w
n
(
$
s
e
l
e
c
t
e
d
 
=
 
'
0
'
,
 
$
n
a
m
e
 
=
 
'
t
a
x
r
a
t
e
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
a
t
e
s
O
p
t
i
o
n
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
r
a
t
e
s
D
r
o
p
d
o
w
n
 
=
 
'
'
;


 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
A
l
l
T
a
x
R
a
t
e
s
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
t
a
x
r
a
t
e
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
O
p
t
i
o
n
s
[
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
r
[
 
'
i
d
'
 
]
,
 
$
r
[
 
'
c
o
d
e
'
 
]
.
'
 
'
.
$
r
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
r
a
t
e
s
D
r
o
p
d
o
w
n
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
r
a
t
e
s
O
p
t
i
o
n
s
,
 
$
n
a
m
e
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
l
e
c
t
e
d
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
a
t
e
s
D
r
o
p
d
o
w
n
;

 
 
 
 
}

}

