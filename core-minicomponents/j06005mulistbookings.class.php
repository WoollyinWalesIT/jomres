
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
5
m
u
l
i
s
t
b
o
o
k
i
n
g
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
 
t
r
u
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
 
c
o
n
t
r
a
c
t
_
u
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
_
r
e
v
i
e
w
s
_
r
a
t
i
n
g
s
 
W
H
E
R
E
 
u
s
e
r
_
i
d
 
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
J
R
U
s
e
r
-
>
i
d
;

	
	
$
r
e
v
i
e
w
e
d
_
c
o
n
t
r
a
c
t
s
_
d
a
t
a
 
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
r
e
v
i
e
w
e
d
_
c
o
n
t
r
a
c
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
v
i
e
w
e
d
_
c
o
n
t
r
a
c
t
s
_
d
a
t
a
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
v
i
e
w
e
d
_
c
o
n
t
r
a
c
t
s
_
d
a
t
a
 
a
s
 
$
r
e
v
i
e
w
 
)
 
{

	
	
	
	
$
r
e
v
i
e
w
e
d
_
c
o
n
t
r
a
c
t
s
[
]
=
$
r
e
v
i
e
w
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
	
}

	
	
}

	
	

 
 
 
 
 
 
 
 
i
f
 
(
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
R
e
g
i
s
t
e
r
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
o
w
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
a
l
l
G
u
e
s
t
U
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
i
s
_
p
a
r
t
n
e
r
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
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
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
_
g
u
e
s
t
s
 
W
H
E
R
E
 
m
o
s
_
u
s
e
r
i
d
 
=
 
'
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
J
R
U
s
e
r
-
>
i
d
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
g
u
e
s
t
s
_
u
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
_
g
u
e
s
t
s
 
W
H
E
R
E
 
p
a
r
t
n
e
r
_
i
d
 
=
 
'
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
J
R
U
s
e
r
-
>
i
d
.
"
'
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
s
_
u
i
d
s
 
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
B
e
c
a
u
s
e
 
a
 
n
e
w
 
r
e
c
o
r
d
 
i
s
 
m
a
d
e
 
i
n
 
t
h
e
 
g
u
e
s
t
s
 
t
a
b
l
e
 
f
o
r
 
e
a
c
h
 
n
e
w
 
p
r
o
p
e
r
t
y
 
t
h
e
 
g
u
e
s
t
 
r
e
g
i
s
t
e
r
s
 
i
n
,
 
w
e
 
n
e
e
d
 
t
o
 
f
i
n
d
 
a
l
l
 
t
h
e
 
g
u
e
s
t
 
u
i
d
s
 
f
o
r
 
t
h
i
s
 
u
s
e
r

 
 
 
 
 
 
 
 
 
 
 
 
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
g
u
e
s
t
s
_
u
i
d
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
g
u
e
s
t
s
_
u
i
d
s
 
a
s
 
$
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
l
G
u
e
s
t
U
i
d
s
[
 
]
 
=
 
$
g
-
>
g
u
e
s
t
s
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
 
*
 
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
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
g
u
e
s
t
_
u
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
a
l
l
G
u
e
s
t
U
i
d
s
)
.
'
)
 
A
N
D
 
c
a
n
c
e
l
l
e
d
 
=
 
0
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
s
 
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

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
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

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
o
n
t
r
a
c
t
s
 
)
 
>
 
0
 
)
 
/
/
w
e
`
l
l
 
j
u
s
t
 
d
i
s
p
l
a
y
 
a
n
 
e
m
p
t
y
 
t
a
b
l
e
 
i
f
 
t
h
e
r
e
 
a
r
e
 
n
o
 
b
o
o
k
i
n
g
s
.

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
A
R
R
I
V
A
L
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
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
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
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
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
P
A
R
T
U
R
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
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
E
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
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
O
T
A
L
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
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
X
T
R
A
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
S
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
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
P
N
A
M
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
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
P
R
O
P
E
R
T
Y
N
A
M
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
P
R
O
P
E
R
T
Y
N
A
M
E
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
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
O
R
E
I
N
F
O
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
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
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
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
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
 
i
s
s
e
t
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
[
'
u
n
r
e
v
i
e
w
e
d
'
]
)
 
)

	
	
	
	
$
o
u
t
p
u
t
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
B
O
O
K
I
N
G
S
_
A
W
A
I
T
I
N
G
_
R
E
V
I
E
W
S
'
,
 
'
B
O
O
K
I
N
G
S
_
A
W
A
I
T
I
N
G
_
R
E
V
I
E
W
S
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
f
a
l
s
e
)
;

	
	
	
e
l
s
e

	
	
	
	
$
o
u
t
p
u
t
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
C
O
M
P
_
M
Y
U
S
E
R
_
M
Y
B
O
O
K
I
N
G
S
'
,
 
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
M
Y
B
O
O
K
I
N
G
S
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
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
!
e
m
p
t
y
(
$
c
o
n
t
r
a
c
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
c
o
n
t
r
a
c
t
s
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
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
 
>
 
0
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
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
p
r
o
p
e
r
t
y
'
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
c
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
P
R
O
P
E
R
T
Y
N
A
M
E
'
 
]
 
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
N
a
m
e
(
$
c
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
A
R
R
I
V
A
L
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
c
-
>
a
r
r
i
v
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
D
E
P
A
R
T
U
R
E
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
c
-
>
d
e
p
a
r
t
u
r
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
A
S
T
C
H
A
N
G
E
D
'
 
]
 
=
 
$
c
-
>
t
i
m
e
s
t
a
m
p
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
E
X
T
R
A
S
V
A
L
U
E
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
c
-
>
e
x
t
r
a
s
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
C
O
N
T
R
A
C
T
_
T
O
T
A
L
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
c
-
>
c
o
n
t
r
a
c
t
_
t
o
t
a
l
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
I
M
A
G
E
'
 
]
 
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
p
r
o
p
e
r
t
y
'
]
[
0
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
V
I
E
W
L
I
N
K
'
 
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
m
u
v
i
e
w
b
o
o
k
i
n
g
&
c
o
n
t
r
a
c
t
_
u
i
d
=
'
.
$
c
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
V
I
E
W
L
I
N
K
_
T
E
X
T
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
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
L
I
N
K
'
 
]
 
=
 
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
d
e
t
a
i
l
s
_
u
r
l
(
$
c
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
)
;

	
	
	
	
	
	

	
	
	
	
	
	
i
f
 
(
 
!
i
n
_
a
r
r
a
y
(
$
c
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
,
 
$
r
e
v
i
e
w
e
d
_
c
o
n
t
r
a
c
t
s
 
)
 
)
 
{

	
	
	
	
	
	
	
$
r
[
 
'
R
E
V
I
E
W
L
I
N
K
'
 
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
a
d
d
_
r
e
v
i
e
w
&
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
c
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
.
'
&
c
o
n
t
r
a
c
t
_
u
i
d
=
'
.
$
c
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
	
	
	
	
	
$
r
[
 
'
R
E
V
I
E
W
L
I
N
K
_
T
E
X
T
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
R
E
V
I
E
W
S
_
A
D
D
_
R
E
V
I
E
W
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
R
E
V
I
E
W
S
_
A
D
D
_
R
E
V
I
E
W
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
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
E
V
I
E
W
L
I
N
K
'
 
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
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
r
e
v
i
e
w
e
d
_
c
o
n
t
r
a
c
t
s
&
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
c
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

	
	
	
	
	
	
	
$
r
[
 
'
R
E
V
I
E
W
L
I
N
K
_
T
E
X
T
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
R
E
V
I
E
W
S
_
C
L
I
C
K
T
O
S
H
O
W
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
R
E
V
I
E
W
S
_
C
L
I
C
K
T
O
S
H
O
W
'
,
 
$
e
d
i
t
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
,
 
$
i
s
L
i
n
k
 
=
 
t
r
u
e
)
;

	
	
	
	
	
	
}


	
	
	
	
	
	
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
_
R
E
Q
U
E
S
T
[
'
u
n
r
e
v
i
e
w
e
d
'
]
)
 
&
&
 
!
i
n
_
a
r
r
a
y
(
$
c
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
,
 
$
r
e
v
i
e
w
e
d
_
c
o
n
t
r
a
c
t
s
 
)
 
)
 
{

	
	
	
	
	
	
	
$
r
o
w
s
[
 
]
 
=
 
$
r
;

	
	
	
	
	
	
}
 
e
l
s
e
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
_
R
E
Q
U
E
S
T
[
'
u
n
r
e
v
i
e
w
e
d
'
]
)
)
 
{

	
	
	
	
	
	
	
$
r
o
w
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
r
o
w
s
'
,
 
$
r
o
w
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
l
i
s
t
_
b
o
o
k
i
n
g
s
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
l
s
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
e
c
h
o
 
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
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
N
O
N
E
'
,
 
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
N
O
N
E
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
}

 
 
 
 
 
 
 
 
 
 
 
 
/
/
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
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
o
u
t
p
u
t
[
 
'
H
A
R
R
I
V
A
L
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
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
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
V
I
E
W
B
O
O
K
I
N
G
S
_
A
R
R
I
V
A
L
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
P
A
R
T
U
R
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
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
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
C
O
M
_
M
R
_
V
I
E
W
B
O
O
K
I
N
G
S
_
D
E
P
A
R
T
U
R
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
T
O
T
A
L
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
T
O
T
A
L
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
X
T
R
A
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
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
A
J
A
X
F
O
R
M
_
B
I
L
L
I
N
G
_
E
X
T
R
A
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
P
N
A
M
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
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
P
R
O
P
E
R
T
Y
N
A
M
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
C
O
M
_
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
2
_
P
R
O
P
E
R
T
Y
N
A
M
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
M
O
R
E
I
N
F
O
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
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
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
C
O
M
_
A
_
C
L
I
C
K
F
O
R
M
O
R
E
I
N
F
O
R
M
A
T
I
O
N
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
C
O
M
P
_
M
Y
U
S
E
R
_
M
Y
B
O
O
K
I
N
G
S
'
,
 
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
M
Y
B
O
O
K
I
N
G
S
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
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
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
 
n
u
l
l
;

 
 
 
 
}

}

