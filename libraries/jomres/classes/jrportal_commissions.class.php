
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
c
o
m
m
i
s
s
i
o
n
s
 
/
/
 
F
u
n
c
t
i
o
n
s
 
s
u
p
p
l
i
e
d
 
a
s
 
a
 
c
l
a
s
s
 
s
o
 
t
h
a
t
 
t
h
e
y
 
c
a
n
 
b
e
 
e
x
t
e
n
d
e
d
 
e
a
s
i
l
y
 
w
i
t
h
o
u
t
 
r
e
w
r
i
t
i
n
g
 
 
t
h
e
 
f
u
n
c
t
i
o
n
s

{

 
 
 
 
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
c
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
t
i
t
l
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
t
y
p
e
 
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
v
a
l
u
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
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
'
G
B
P
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
a
x
_
r
a
t
e
 
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
C
r
a
t
e
F
o
r
P
r
o
p
e
r
t
y
u
i
d
(
$
p
r
o
p
e
r
t
y
_
u
i
d
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
S
E
L
E
C
T
 
c
r
a
t
e
_
i
d
 
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
p
r
o
p
e
r
t
i
e
s
_
c
r
a
t
e
s
_
x
r
e
f
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
_
i
d
 
=
 
'
.
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
$
c
r
a
t
e
_
i
d
 
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
c
o
u
n
t
(
$
c
r
a
t
e
_
i
d
)
 
=
=
 
1
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
c
r
a
t
e
_
i
d
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
r
a
t
e
s
 
=
 
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
C
r
a
t
e
s
(
"
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
"
.
$
c
-
>
c
r
a
t
e
_
i
d
.
"
'
 
L
I
M
I
T
 
1
"
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
r
a
t
e
s
[
 
$
c
-
>
c
r
a
t
e
_
i
d
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
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
C
r
a
t
e
s
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
c
r
a
t
e
s
 
=
 
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
C
r
a
t
e
s
(
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
r
a
t
e
s
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
C
r
a
t
e
s
B
y
I
d
A
r
r
a
y
(
$
i
d
A
r
r
a
y
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
W
H
E
R
E
 
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
i
d
A
r
r
a
y
)
.
'
)
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
r
a
t
e
s
 
=
 
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
C
r
a
t
e
s
(
$
c
l
a
u
s
e
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
r
a
t
e
s
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
C
r
a
t
e
s
(
$
c
l
a
u
s
e
 
=
 
'
'
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
t
i
t
l
e
`
,
`
t
y
p
e
`
,
`
v
a
l
u
e
`
,
`
c
u
r
r
e
n
c
y
c
o
d
e
`
,
`
t
a
x
_
r
a
t
e
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
c
_
r
a
t
e
s
 
'
.
$
c
l
a
u
s
e
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
c
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
c
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
t
i
t
l
e
'
 
]
 
=
 
$
r
-
>
t
i
t
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
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
t
y
p
e
'
 
]
 
=
 
$
r
-
>
t
y
p
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
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
v
a
l
u
e
'
 
]
 
=
 
$
r
-
>
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
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
u
r
r
e
n
c
y
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
u
r
r
e
n
c
y
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
c
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
t
a
x
_
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
t
a
x
_
r
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
c
r
a
t
e
s
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
C
r
a
t
e
(
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
t
h
i
s
-
>
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
t
i
t
l
e
`
,
`
t
y
p
e
`
,
`
v
a
l
u
e
`
,
`
c
u
r
r
e
n
c
y
c
o
d
e
`
,
`
t
a
x
_
r
a
t
e
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
c
_
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
t
h
i
s
-
>
i
d
.
'
 
L
I
M
I
T
 
1
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
$
r
e
s
u
l
t
 
&
&
 
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
=
=
 
1
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
i
d
 
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
i
t
l
e
 
=
 
$
r
-
>
t
i
t
l
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
y
p
e
 
=
 
$
r
-
>
t
y
p
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
v
a
l
u
e
 
=
 
$
r
-
>
v
a
l
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
r
-
>
c
u
r
r
e
n
c
y
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
_
r
a
t
e
 
=
 
$
r
-
>
t
a
x
_
r
a
t
e
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
r
e
s
u
l
t
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
e
r
r
o
r
 
=
 
'
N
o
 
C
o
m
m
i
s
s
i
o
n
 
r
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
 
t
h
a
t
 
i
d
'
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
M
o
r
e
 
t
h
a
n
 
o
n
e
 
C
o
m
m
i
s
s
i
o
n
 
r
a
t
e
 
w
a
s
 
f
o
u
n
d
 
w
i
t
h
 
t
h
a
t
 
i
d
'
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
I
D
 
o
f
 
C
o
m
m
i
s
s
i
o
n
 
r
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
 
c
o
m
m
i
t
N
e
w
C
r
a
t
e
(
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
t
h
i
s
-
>
i
d
 
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
c
_
r
a
t
e
s

	
	
	
	
(

	
	
	
	
`
t
i
t
l
e
`
,

	
	
	
	
`
t
y
p
e
`
,

	
	
	
	
`
v
a
l
u
e
`
,

	
	
	
	
`
c
u
r
r
e
n
c
y
c
o
d
e
`
,

	
	
	
	
`
t
a
x
_
r
a
t
e
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
$
t
h
i
s
-
>
t
i
t
l
e
'
,

	
	
	
	
"
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
y
p
e
.
'
,

	
	
	
	
'
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
v
a
l
u
e
.
"
,

	
	
	
	
'
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
'
,

	
	
	
	
"
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
a
x
_
r
a
t
e
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
i
d
 
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
 
'
I
D
 
o
f
 
C
o
m
m
i
s
s
i
o
n
 
r
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
 
'
I
D
 
o
f
 
C
o
m
m
i
s
s
i
o
n
 
r
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
 
C
o
m
m
i
s
s
i
o
n
 
r
a
t
e
?
'
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
C
r
a
t
e
(
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
t
h
i
s
-
>
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
c
_
r
a
t
e
s
 
S
E
T

	
	
	
	
`
t
i
t
l
e
`
 
	
	
	
=
 
'
$
t
h
i
s
-
>
t
i
t
l
e
'
,

	
	
	
	
`
t
y
p
e
`
 
	
	
	
	
=
 
"
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
y
p
e
.
'
,

	
	
	
	
`
v
a
l
u
e
`
 
	
	
	
=
 
'
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
v
a
l
u
e
.
"
,

	
	
	
	
`
c
u
r
r
e
n
c
y
c
o
d
e
`
 
	
	
=
 
'
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
'
,

	
	
	
	
`
t
a
x
_
r
a
t
e
`
 
	
	
	
=
 
"
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
a
x
_
r
a
t
e
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
i
d
.
'
 
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
 
'
I
D
 
o
f
 
C
o
m
m
i
s
s
i
o
n
 
r
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
 
'
I
D
 
o
f
 
C
o
m
m
i
s
s
i
o
n
 
r
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
C
r
a
t
e
s
(
$
i
d
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
'
;


 
 
 
 
 
 
 
 
i
f
 
(
$
i
d
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
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
'
i
d
 
I
N
 
(
'
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
i
d
)
.
'
)
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
c
l
a
u
s
e
 
=
 
'
i
d
 
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
.
'
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
l
a
u
s
e
 
!
=
 
'
'
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
c
_
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
 
'
.
$
c
l
a
u
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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
 
m
a
k
e
C
r
a
t
e
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
 
1
,
 
$
i
d
x
 
=
 
n
u
l
l
,
 
$
p
a
r
a
m
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
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
j
s
 
=
 
'
'
;


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
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
'
0
'
,
 
'
-
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
r
a
t
e
s
 
a
s
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
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
v
[
 
'
i
d
'
 
]
,
 
$
v
[
 
'
t
i
t
l
e
'
 
]
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
p
a
r
a
m
s
)
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
p
a
r
a
m
s
[
'
p
r
o
p
e
r
t
y
_
u
i
d
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
s
 
=
 
'
o
n
c
h
a
n
g
e
=
"
s
a
v
e
c
r
a
t
e
s
(
\
'
'
.
$
p
a
r
a
m
s
[
'
p
r
o
p
e
r
t
y
_
u
i
d
'
]
.
'
\
'
,
 
t
h
i
s
.
v
a
l
u
e
 
)
;
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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
o
p
t
i
o
n
s
,
 
"
c
r
a
t
e
s
[
$
i
d
x
]
"
,
 
'
 
s
i
z
e
=
"
1
"
'
.
$
j
s
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
,
 
f
a
l
s
e
)
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
 
m
a
k
e
C
r
a
t
e
T
y
p
e
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
 
1
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
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
t
y
p
e
s
 
=
 
a
r
r
a
y
(
'
1
'
 
=
>
 
'
F
l
a
t
'
,
 
'
2
'
 
=
>
 
'
P
e
r
c
e
n
t
a
g
e
'
)
;


 
 
 
 
 
 
 
 
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
y
p
e
s
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
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
k
,
 
$
v
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
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
o
p
t
i
o
n
s
,
 
'
t
y
p
e
'
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
 
a
s
s
i
g
n
D
e
f
a
u
l
t
C
r
a
t
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
,
 
$
c
r
a
t
e
_
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
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
0
)
 
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


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
r
a
t
e
_
i
d
 
=
=
 
0
)
 
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


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
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
p
r
o
p
e
r
t
i
e
s
_
c
r
a
t
e
s
_
x
r
e
f
 
(
 
`
p
r
o
p
e
r
t
y
_
i
d
`
,
`
c
r
a
t
e
_
i
d
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
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
.
'
,
 
'
.
$
c
r
a
t
e
_
i
d
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

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
I
D
 
o
f
 
P
r
o
p
e
r
t
y
 
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
 
g
e
t
C
u
r
r
e
n
t
C
r
a
t
e
I
n
v
o
i
c
e
I
d
F
o
r
M
a
n
a
g
e
r
I
d
(
$
m
a
n
a
g
e
r
_
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
m
a
n
a
g
e
r
_
i
d
 
=
=
 
0
)
 
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
 
i
d
 
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
i
n
v
o
i
c
e
s
 
W
H
E
R
E
 
c
m
s
_
u
s
e
r
_
i
d
 
=
 
'
.
(
i
n
t
)
 
$
m
a
n
a
g
e
r
_
i
d
.
"
 
A
N
D
 
`
i
s
_
c
o
m
m
i
s
s
i
o
n
`
 
=
 
1
 
A
N
D
 
`
r
a
i
s
e
d
_
d
a
t
e
`
 
<
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
 
"
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
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
,
 
1
)
;


 
 
 
 
 
 
 
 
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
n
v
o
i
c
e
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
_
i
d
;

 
 
 
 
 
 
 
 
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
r
e
a
t
e
N
e
w
C
r
a
t
e
I
n
v
o
i
c
e
F
o
r
M
a
n
a
g
e
r
I
d
(
$
m
a
n
a
g
e
r
_
i
d
 
=
 
0
,
 
$
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
'
G
B
P
'
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
m
a
n
a
g
e
r
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
M
a
n
a
g
e
r
 
i
d
 
n
o
t
 
s
e
t
'
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


 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
'
)
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
i
n
v
o
i
c
e
(
)
;


 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
i
d
 
=
 
0
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
c
m
s
_
u
s
e
r
_
i
d
 
=
 
$
m
a
n
a
g
e
r
_
i
d
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
s
t
a
t
u
s
 
=
 
3
;
 
/
/
p
e
n
d
i
n
g

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
r
a
i
s
e
d
_
d
a
t
e
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
d
u
e
_
d
a
t
e
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
c
u
r
r
e
n
c
y
c
o
d
e
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
 
1
;


 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
-
>
c
o
m
m
i
t
N
e
w
I
n
v
o
i
c
e
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
i
n
v
o
i
c
e
-
>
i
d
;

 
 
 
 
 
 
 
 
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

}
 
/
/
e
n
d
 
c
l
a
s
s

