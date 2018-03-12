
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
1
1
0
2
0
t
o
w
n
s

	
{

	
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
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
 
)

	
	
{

	
	
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
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
m
c
H
a
n
d
l
e
r
'
 
)
;

	
	
i
f
 
(
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
 
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
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;

	
	
	
r
e
t
u
r
n
;

	
	
	
}

	
	
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
 
)
;

	
	
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)

	
	
	
{

	
	
	
r
e
t
u
r
n
;

	
	
	
}

	
	

	
	
$
d
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


	
	
/
/
b
i
g
 
r
e
s
u
l
t
s
 
l
i
s
t
 
o
n
 
b
i
g
 
s
i
t
e
s
.
.
.
w
e
 
n
e
e
d
 
a
 
b
e
t
t
e
r
 
w
a
y
,
 
b
e
c
a
u
s
e
 
g
r
o
u
p
i
n
g
 
b
y
 
p
r
o
p
e
r
t
y
 
t
o
w
n
 
w
o
n
`
t
 
w
o
r
k
 
i
f
 
m
y
s
q
l
 
m
o
d
e
 
i
s
 
s
e
t
 
t
o
 
O
N
L
Y
_
F
U
L
L
_
G
R
O
U
P
_
B
Y

	
	
$
q
u
e
r
y
 
=
 
"
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
t
o
w
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
p
r
o
p
e
r
t
y
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
_
t
o
w
n
`
 
!
=
 
'
'
"
;

	
	
$
t
o
w
n
s
L
i
s
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
t
o
w
n
s
L
i
s
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
t
o
w
n
s
L
i
s
t
 
a
s
 
$
t
)
 
{

	
	
	
	
$
t
o
w
n
s
[
$
t
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
]
 
=
 
$
t
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
t
o
w
n
;

	
	
	
}

	
	
	

	
	
	
$
t
o
w
n
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
$
t
o
w
n
s
)
;

	
	
	

	
	
	
$
r
e
s
o
u
r
c
e
_
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
o
w
n
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

	
	
	
	
s
e
t
_
s
h
o
w
t
i
m
e
(
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
,
 
$
k
)
;

	
	
	
	
$
r
e
s
o
u
r
c
e
_
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
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
s
t
r
i
n
g
U
R
L
S
a
f
e
(
$
v
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
P
R
O
P
E
R
T
Y
_
T
O
W
N
'
,
 
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
 
t
r
i
m
(
 
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
v
 
)
 
)
,
 
E
N
T
_
Q
U
O
T
E
S
 
)
 
)
 
)
;

	
	
	
	
}

	
	
	
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
 
=
 
f
a
l
s
e
;

	
	
	
$
d
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
e
s
o
u
r
c
e
_
o
p
t
i
o
n
s
,
 
'
r
e
s
o
u
r
c
e
_
i
d
'
,
 
'
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
s
u
c
c
e
s
s
 
b
t
n
-
l
g
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
 
'
'
 
,
 
$
u
s
e
_
b
o
o
t
s
t
r
a
p
_
r
a
d
i
o
s
 
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
r
e
t
_
v
a
l
s
 
=
 
$
d
r
o
p
d
o
w
n
;

	
	
}


	
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

	
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
R
e
t
V
a
l
s
(
)

	
	
{

	
	
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
r
e
t
_
v
a
l
s
;

	
	
}

	
}

