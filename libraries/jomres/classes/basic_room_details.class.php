
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
 
b
a
s
i
c
_
r
o
o
m
_
d
e
t
a
i
l
s

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
r
o
o
m
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
r
o
o
m
 
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
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
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


 
 
 
 
/
/
G
e
t
 
a
l
l
 
r
o
o
m
s
 
d
e
t
a
i
l
s

 
 
 
 
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
_
a
l
l
_
r
o
o
m
s
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
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
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
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
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
r
o
o
m
s
)
)
 
{
 
/
/
a
l
r
e
a
d
y
 
e
x
e
c
u
t
e
d
 
b
u
t
 
t
h
e
 
p
r
o
p
e
r
t
y
 
d
o
e
s
n
`
t
 
h
a
v
e
 
a
n
y
 
r
o
o
m
s
 
c
r
e
a
t
e
d
 
y
e
t
,
 
s
o
 
t
h
e
 
a
r
r
a
y
 
i
s
 
e
m
p
t
y

 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
o
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
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
;


 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
 
=
 
'
'
;
 
/
/
h
e
r
e
 
w
e
`
l
l
 
s
t
o
r
e
 
a
l
l
 
r
o
o
m
 
f
e
a
t
u
r
e
 
u
i
d
s
 
s
o
 
w
e
 
c
a
n
 
l
a
t
e
r
 
g
e
t
 
t
h
e
 
d
e
t
a
i
l
s
 
o
n
l
y
 
f
o
r
 
t
h
e
 
u
s
e
d
 
f
e
a
t
u
r
e
s
,
 
n
o
t
 
a
l
l
.


 
 
 
 
 
 
 
 
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
r
o
o
m
_
u
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
_
n
a
m
e
`
,

	
	
	
	
	
	
`
r
o
o
m
_
n
u
m
b
e
r
`
,

	
	
	
	
	
	
`
r
o
o
m
_
f
l
o
o
r
`
,

	
	
	
	
	
	
`
m
a
x
_
p
e
o
p
l
e
`
,

	
	
	
	
	
	
`
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
`
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
t
a
g
l
i
n
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
_
r
o
o
m
s
 

	
	
	
	
	
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
s
_
u
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
 

	
	
	
	
	
O
R
D
E
R
 
B
Y
 
L
E
N
G
T
H
(
r
o
o
m
_
n
u
m
b
e
r
)
,
 
r
o
o
m
_
n
u
m
b
e
r
,
 
r
o
o
m
_
n
a
m
e

	
	
	
	
	
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
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
u
i
d
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
u
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
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
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
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
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
s
_
u
i
d
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
p
r
o
p
e
r
t
y
s
_
u
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
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
 
 
 
 
 
 
 
 
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
n
a
m
e
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
N
A
M
E
_
T
I
T
L
E
'
.
$
r
-
>
r
o
o
m
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
n
a
m
e
)
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
n
u
m
b
e
r
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
n
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
f
l
o
o
r
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
f
l
o
o
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
m
a
x
_
p
e
o
p
l
e
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
m
a
x
_
p
e
o
p
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
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
 
 
 
=
 
(
f
l
o
a
t
)
 
$
r
-
>
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
t
a
g
l
i
n
e
'
]
 
 
 
 
 
 
 
 
 
	
	
	
=
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
T
A
G
L
I
N
E
'
.
$
r
-
>
r
o
o
m
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
t
a
g
l
i
n
e
)
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
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
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
_
'
.
$
r
-
>
r
o
o
m
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
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
)
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
 
.
=
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
-
>
r
o
o
m
_
u
i
d
]
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
.
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
 
=
 
s
u
b
s
t
r
(
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
,
 
0
,
 
-
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
e
x
p
l
o
d
e
(
'
,
'
,
 
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
)
)
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
_
r
o
o
m
s
_
f
e
a
t
u
r
e
s
(
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
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


 
 
 
 
/
/
G
e
t
 
r
o
o
m
 
d
e
t
a
i
l
s

 
 
 
 
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
_
r
o
o
m
(
$
r
o
o
m
_
u
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
R
o
o
m
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
r
o
o
m
s
)
 
&
&
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
r
o
o
m
_
u
i
d
,
 
$
t
h
i
s
-
>
r
o
o
m
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
r
o
o
m
 
=
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
o
o
m
_
u
i
d
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
r
o
o
m
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
r
o
o
m
 
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
r
o
o
m
_
u
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
`
,

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
s
_
u
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
`
,

	
	
	
	
	
	
`
r
o
o
m
_
n
a
m
e
`
,

	
	
	
	
	
	
`
r
o
o
m
_
n
u
m
b
e
r
`
,

	
	
	
	
	
	
`
r
o
o
m
_
f
l
o
o
r
`
,

	
	
	
	
	
	
`
m
a
x
_
p
e
o
p
l
e
`
,

	
	
	
	
	
	
`
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
`
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
`
t
a
g
l
i
n
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
_
r
o
o
m
s
 

	
	
	
	
	
W
H
E
R
E
 
`
r
o
o
m
_
u
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
r
o
o
m
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
r
o
o
m
[
'
r
o
o
m
_
u
i
d
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
u
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
r
o
o
m
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
c
l
a
s
s
e
s
_
u
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
r
o
o
m
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
s
_
u
i
d
'
]
 
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
p
r
o
p
e
r
t
y
s
_
u
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
r
o
o
m
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
 
 
 
 
 
 
 
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
[
'
r
o
o
m
_
n
a
m
e
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
N
A
M
E
_
T
I
T
L
E
'
.
$
r
-
>
r
o
o
m
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
n
a
m
e
)
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
[
'
r
o
o
m
_
n
u
m
b
e
r
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
n
u
m
b
e
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
[
'
r
o
o
m
_
f
l
o
o
r
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
r
o
o
m
_
f
l
o
o
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
[
'
m
a
x
_
p
e
o
p
l
e
'
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
(
i
n
t
)
 
$
r
-
>
m
a
x
_
p
e
o
p
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
r
o
o
m
[
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
 
 
=
 
(
f
l
o
a
t
)
 
$
r
-
>
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
[
'
t
a
g
l
i
n
e
'
]
 
 
 
 
 
 
 
 
	
	
	
=
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
T
A
G
L
I
N
E
'
.
$
r
-
>
r
o
o
m
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
t
a
g
l
i
n
e
)
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
o
o
m
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
 
j
o
m
r
e
s
_
d
e
c
o
d
e
(
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
_
'
.
$
r
-
>
r
o
o
m
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
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
)
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
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
 
$
t
h
i
s
-
>
r
o
o
m
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
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
r
o
o
m
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
 
=
 
a
r
r
a
y
_
u
n
i
q
u
e
(
e
x
p
l
o
d
e
(
'
,
'
,
 
$
t
h
i
s
-
>
r
o
o
m
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
)
)
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
_
r
o
o
m
s
_
f
e
a
t
u
r
e
s
(
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
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
_
r
o
o
m
s
_
f
e
a
t
u
r
e
s
(
$
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
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
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
R
o
o
m
 
f
e
a
t
u
r
e
 
u
i
d
s
 
n
o
t
 
s
e
t
.
'
)
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
 

	
	
	
	
	
	
`
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
`
,
 

	
	
	
	
	
	
`
f
e
a
t
u
r
e
_
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
`
,
 

	
	
	
	
	
	
`
p
t
y
p
e
_
x
r
e
f
`
,
 

	
	
	
	
	
	
`
i
m
a
g
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
_
r
o
o
m
_
f
e
a
t
u
r
e
s
 

	
	
	
	
	
W
H
E
R
E
 
`
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
`
 
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
r
o
o
m
_
f
e
a
t
u
r
e
_
u
i
d
s
)
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
r
o
o
m
 
f
e
a
t
u
r
e
 
i
m
a
g
e
s
 
f
o
r
 
t
o
o
l
t
i
p
s

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
t
h
i
s
-
>
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
,
 
a
r
r
a
y
(
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
)
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
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
 
]
 
=
 
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
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
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
f
e
a
t
u
r
e
_
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
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
S
C
R
I
P
T
I
O
N
'
.
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
f
e
a
t
u
r
e
_
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
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
-
>
p
t
y
p
e
_
x
r
e
f
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
p
t
y
p
e
_
x
r
e
f
'
 
]
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
r
-
>
p
t
y
p
e
_
x
r
e
f
)
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
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
p
t
y
p
e
_
x
r
e
f
'
 
]
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
f
e
a
t
u
r
e
 
i
m
a
g
e
s

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
_
i
m
a
g
e
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
[
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
-
>
i
m
a
g
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
_
i
m
a
g
e
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
r
m
f
e
a
t
u
r
e
s
/
'
.
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
i
m
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
]
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
0
]
[
'
s
m
a
l
l
'
]
)
)
 
{

	
	
	
	
	
$
f
e
a
t
u
r
e
_
i
m
a
g
e
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
'
]
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
0
]
[
'
s
m
a
l
l
'
]
;

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
i
m
a
g
e
'
 
]
 
=
 
$
f
e
a
t
u
r
e
_
i
m
a
g
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
]
[
 
'
t
o
o
l
t
i
p
'
 
]
 
=
 
j
o
m
r
e
s
_
m
a
k
e
T
o
o
l
t
i
p
(
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
S
C
R
I
P
T
I
O
N
'
.
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
f
e
a
t
u
r
e
_
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
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
,
 
j
r
_
g
e
t
t
e
x
t
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
C
U
S
T
O
M
T
E
X
T
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
S
C
R
I
P
T
I
O
N
'
.
(
i
n
t
)
 
$
r
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
-
>
f
e
a
t
u
r
e
_
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
)
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
,
 
'
'
,
 
$
f
e
a
t
u
r
e
_
i
m
a
g
e
,
 
'
'
,
 
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
f
e
a
t
u
r
e
'
,
 
a
r
r
a
y
(
)
)
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


 
 
 
 
/
/
G
e
t
 
p
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
 
f
o
r
 
r
o
o
m
 
u
i
d

 
 
 
 
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
_
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
_
f
o
r
_
r
o
o
m
_
u
i
d
(
$
r
o
o
m
_
u
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
E
r
r
o
r
:
 
R
o
o
m
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
r
o
o
m
s
)
 
&
&
 
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
r
o
o
m
_
u
i
d
,
 
$
t
h
i
s
-
>
r
o
o
m
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
 
$
t
h
i
s
-
>
r
o
o
m
s
[
$
r
o
o
m
_
u
i
d
]
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
s
_
u
i
d
'
]
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
 

	
	
	
	
	
	
`
p
r
o
p
e
r
t
y
s
_
u
i
d
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
_
r
o
o
m
s
 

	
	
	
	
	
W
H
E
R
E
 
`
r
o
o
m
_
u
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
r
o
o
m
_
u
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
r
e
s
u
l
t
 
<
 
1
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
t
h
i
s
-
>
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
 
(
i
n
t
)
 
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
 
$
t
h
i
s
-
>
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
;

 
 
 
 
}

}

