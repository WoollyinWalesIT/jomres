
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
0
6
0
0
0
s
h
o
w
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
t
a
r
i
f
f
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
a
s
k
'
 
=
>
 
'
s
h
o
w
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
t
a
r
i
f
f
s
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
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
A
R
I
F
F
S
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
s
'
 
=
>
 
a
r
r
a
y
(
0
 
=
>
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
S
H
O
W
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
A
R
I
F
F
S
_
A
R
G
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
U
I
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
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
-
>
r
e
t
V
a
l
s
 
=
 
'
'
;


 
 
 
 
 
 
 
 
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
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
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
 
(
i
n
t
)
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
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
u
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
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

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
e
r
_
c
a
n
_
v
i
e
w
_
t
h
i
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
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
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
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
(
b
o
o
l
)
 
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
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)

 
 
 
 
 
 
 
 
/
/
	
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
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
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
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
)
;

 
 
 
 
 
 
 
 
$
p
o
p
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
o
p
u
p
'
,
 
'
0
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
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
b
a
s
i
c
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
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
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
;

 
 
 
 
 
 
 
 

	
	
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
V
a
l
s
 
=
 
'
'
;

	
	
$
t
a
r
i
f
f
_
d
e
e
t
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
o
u
t
p
u
t
 
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
a
t
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
a
t
e
_
t
i
t
l
e
`
,
`
r
a
t
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
v
a
l
i
d
f
r
o
m
`
,
`
v
a
l
i
d
t
o
`
,

	
	
	
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
`
,
`
m
i
n
d
a
y
s
`
,
`
m
a
x
d
a
y
s
`
,
`
m
i
n
p
e
o
p
l
e
`
,
`
m
a
x
p
e
o
p
l
e
`
,
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
,

	
	
	
`
i
g
n
o
r
e
_
p
p
p
n
`
,
`
a
l
l
o
w
_
p
h
`
,
`
a
l
l
o
w
_
w
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
a
t
e
s
 
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
u
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
 
O
R
D
E
R
 
B
Y
 
r
a
t
e
_
t
i
t
l
e
,
r
o
o
m
c
l
a
s
s
_
u
i
d
,
v
a
l
i
d
t
o
'
;

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
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


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
T
I
T
L
E
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
D
E
S
C
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
O
O
M
T
Y
P
E
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
R
O
O
M
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
R
O
O
M
T
Y
P
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
T
A
R
T
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
E
N
D
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
M
I
N
D
A
Y
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
M
A
X
D
A
Y
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
M
I
N
P
E
E
P
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
M
A
X
P
E
E
P
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
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
t
a
r
i
f
f
t
y
p
e
_
i
d
`
,
`
t
a
r
i
f
f
_
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
c
o
m
p
_
t
a
r
i
f
f
t
y
p
e
_
r
a
t
e
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

 
 
 
 
 
 
 
 

	
	
$
t
a
r
i
f
f
_
t
a
r
i
f
f
t
y
p
e
s
_
x
r
e
f
 
=
 
a
r
r
a
y
(
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
a
r
i
f
f
_
t
a
r
i
f
f
t
y
p
e
s
_
x
r
e
f
[
 
$
r
-
>
t
a
r
i
f
f
_
i
d
 
]
 
=
 
$
r
-
>
t
a
r
i
f
f
t
y
p
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
a
r
i
f
f
s
L
i
s
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
0
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
a
r
i
f
f
s
L
i
s
t
 
a
s
 
$
t
a
r
i
f
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
f
r
o
m
 
=
 
$
t
a
r
i
f
f
-
>
v
a
l
i
d
f
r
o
m
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
v
a
l
i
d
t
o
 
=
 
$
t
a
r
i
f
f
-
>
v
a
l
i
d
t
o
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
v
a
l
i
d
f
r
o
m
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
V
a
l
i
d
f
r
o
m
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
v
a
l
i
d
t
o
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
n
i
x
V
a
l
i
d
t
o
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
<
 
$
u
n
i
x
V
a
l
i
d
t
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
[
 
'
H
T
I
T
L
E
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
T
I
T
L
E
'
)
;

	
	
	
	
	
$
r
[
 
'
H
D
E
S
C
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
D
E
S
C
'
)
;

	
	
	
	
	
$
r
[
 
'
H
R
O
O
M
T
Y
P
E
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
R
O
O
M
T
Y
P
E
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
R
O
O
M
T
Y
P
E
'
)
;

	
	
	
	
	
$
r
[
 
'
H
S
T
A
R
T
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
S
T
A
R
T
S
'
)
;

	
	
	
	
	
$
r
[
 
'
H
E
N
D
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
E
N
D
S
'
)
;

	
	
	
	
	
$
r
[
 
'
H
M
I
N
D
A
Y
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
D
A
Y
S
'
)
;

	
	
	
	
	
$
r
[
 
'
H
M
A
X
D
A
Y
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
D
A
Y
S
'
)
;

	
	
	
	
	
$
r
[
 
'
H
M
I
N
P
E
E
P
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
I
N
P
E
E
P
S
'
)
;

	
	
	
	
	
$
r
[
 
'
H
M
A
X
P
E
E
P
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
M
A
X
P
E
E
P
S
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
a
r
i
f
f
_
t
a
r
i
f
f
t
y
p
e
s
_
x
r
e
f
[
 
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
T
I
T
L
E
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
T
A
R
I
F
F
_
T
I
T
L
E
_
T
A
R
I
F
F
T
Y
P
E
_
I
D
'
.
$
t
a
r
i
f
f
_
t
a
r
i
f
f
t
y
p
e
s
_
x
r
e
f
[
 
$
t
a
r
i
f
f
-
>
r
a
t
e
s
_
u
i
d
 
]
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
t
a
r
i
f
f
-
>
r
a
t
e
_
t
i
t
l
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
T
I
T
L
E
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
T
A
R
I
F
F
_
T
I
T
L
E
'
.
$
t
a
r
i
f
f
-
>
r
a
t
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
t
a
r
i
f
f
-
>
r
a
t
e
_
t
i
t
l
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
	
$
r
[
 
'
D
E
S
C
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
T
A
R
I
F
F
D
E
S
C
'
.
$
t
a
r
i
f
f
-
>
r
a
t
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
t
a
r
i
f
f
-
>
r
a
t
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
O
O
M
C
L
A
S
S
A
B
B
V
'
 
]
 
=
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
r
o
o
m
_
t
y
p
e
s
[
$
t
a
r
i
f
f
-
>
r
o
o
m
c
l
a
s
s
_
u
i
d
]
[
'
a
b
b
v
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
O
O
M
C
L
A
S
S
F
U
L
L
D
E
S
C
'
 
]
 
=
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
r
o
o
m
_
t
y
p
e
s
[
$
t
a
r
i
f
f
-
>
r
o
o
m
c
l
a
s
s
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
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
I
N
P
E
O
P
L
E
'
 
]
 
=
 
$
t
a
r
i
f
f
-
>
m
i
n
p
e
o
p
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
A
X
P
E
O
P
L
E
'
 
]
 
=
 
$
t
a
r
i
f
f
-
>
m
a
x
p
e
o
p
l
e
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
V
A
L
I
D
F
R
O
M
'
 
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
t
a
r
i
f
f
-
>
v
a
l
i
d
f
r
o
m
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
V
A
L
I
D
T
O
'
 
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
$
t
a
r
i
f
f
-
>
v
a
l
i
d
t
o
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
I
N
D
A
Y
S
'
 
]
 
=
 
$
t
a
r
i
f
f
-
>
m
i
n
d
a
y
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
A
X
D
A
Y
S
'
 
]
 
=
 
$
t
a
r
i
f
f
-
>
m
a
x
d
a
y
s
;

	
	
	
	
	

	
	
	
	
	
$
r
[
 
'
M
I
N
P
E
O
P
L
E
'
 
]
 
=
 
$
t
a
r
i
f
f
-
>
m
i
n
p
e
o
p
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
M
A
X
P
E
O
P
L
E
'
 
]
 
=
 
$
t
a
r
i
f
f
-
>
m
a
x
p
e
o
p
l
e
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
m
r
C
o
n
f
i
g
[
 
'
r
a
t
e
m
u
l
t
i
p
l
i
e
r
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
r
a
t
e
m
u
l
t
i
p
l
i
e
r
'
 
]
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
r
a
t
e
m
u
l
t
i
p
l
i
e
r
'
 
]
 
+
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
_
i
n
c
_
v
a
t
 
=
 
$
t
a
r
i
f
f
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
_
i
n
c
_
v
a
t
 
=
 
$
c
u
r
r
e
n
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
d
e
t
a
i
l
s
-
>
g
e
t
_
g
r
o
s
s
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
r
i
c
e
(
$
t
a
r
i
f
f
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
,
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
)
 
{
 
/
/
 
T
h
i
s
 
s
h
o
u
l
d
n
'
t
 
b
e
 
n
e
e
d
e
d
,
 
a
s
 
t
h
e
 
s
e
t
t
i
n
g
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
p
u
l
l
e
d
 
f
r
o
m
 
j
o
m
r
e
s
_
c
o
n
f
i
g
.
p
h
p
,
 
b
u
t
 
t
h
e
r
e
'
s
 
a
l
w
a
y
s
 
o
n
e
 
w
e
i
r
d
 
s
e
r
v
e
r
.
.
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
 
'
D
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
D
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
1
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
W
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
7
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
M
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
3
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
D
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
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
$
m
r
C
o
n
f
i
g
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
'
&
n
b
s
p
;
'
.
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
'
&
n
b
s
p
;
'
.
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
W
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
M
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
,
 
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
r
i
f
f
-
>
i
g
n
o
r
e
_
p
p
p
n
 
|
|
 
$
m
r
C
o
n
f
i
g
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
r
i
c
e
_
i
n
c
_
v
a
t
 
*
 
$
m
u
l
t
i
p
l
i
e
r
)
.
'
 
'
.
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
r
i
c
e
_
i
n
c
_
v
a
t
 
*
 
$
m
u
l
t
i
p
l
i
e
r
)
.
'
 
'
.
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
r
i
c
e
_
i
n
c
_
v
a
t
 
*
 
$
m
u
l
t
i
p
l
i
e
r
)
.
'
 
'
.
$
p
o
s
t
_
t
e
x
t
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
 
=
=
 
'
1
'
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
'
 
]
 
=
=
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
_
i
n
c
_
v
a
t
 
=
 
$
p
r
i
c
e
_
i
n
c
_
v
a
t
 
*
 
7
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
R
O
O
M
R
A
T
E
P
E
R
D
A
Y
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
r
i
c
e
_
i
n
c
_
v
a
t
)
.
'
 
'
.
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
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
,
 
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
O
M
_
M
R
_
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
r
i
f
f
-
>
a
l
l
o
w
_
w
e
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
N
O
T
W
E
E
K
E
N
D
S
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
D
'
,
 
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
N
O
T
W
E
E
K
E
N
D
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
e
R
a
t
e
 
=
 
n
u
m
b
e
r
_
f
o
r
m
a
t
(
(
$
p
r
i
c
e
_
i
n
c
_
v
a
t
)
,
 
2
,
 
'
.
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
r
i
f
f
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
e
r
 
%
 
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
C
L
A
S
S
'
 
]
 
=
 
'
e
v
e
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
C
L
A
S
S
'
 
]
 
=
 
'
o
d
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
_
d
e
e
t
s
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;


 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
s
h
o
w
_
t
a
r
i
f
f
s
'
,
 
$
t
a
r
i
f
f
_
d
e
e
t
s
)
;


 
 
 
 
 
 
 
 
$
m
c
O
u
t
p
u
t
 
=
 
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
g
e
t
A
l
l
E
v
e
n
t
P
o
i
n
t
s
D
a
t
a
(
'
0
1
0
2
0
'
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
m
c
O
u
t
p
u
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
m
c
O
u
t
p
u
t
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
c
u
s
t
o
m
O
u
t
p
u
t
_
'
.
$
k
e
y
,
 
a
r
r
a
y
(
$
v
a
l
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

	
	

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
v
e
r
b
o
s
e
t
a
r
i
f
f
i
n
f
o
'
 
]
 
=
=
 
'
0
'
)
 
{

	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
t
e
_
s
h
o
w
_
t
a
r
i
f
f
s
.
h
t
m
l
'
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
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
s
h
o
w
_
t
a
r
i
f
f
s
.
h
t
m
l
'
)
;

	
	
}

 
 
 
 
 
 
 
 


 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
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
r
e
t
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
V
a
l
s
;

 
 
 
 
}

}

