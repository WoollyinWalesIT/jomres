
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
0
5
0
1
b
o
o
k
i
n
g
_
s
e
t
t
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
=
 
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
 
]
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
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
1
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
l
i
s
t
s
 
=
 
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
l
i
s
t
s
'
 
]
;

 
 
 
 
 
 
 
 
/
/
$
t
a
b
s
=
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
t
a
b
s
'
]
;

 
 
 
 
 
 
 
 
$
w
e
e
k
e
n
d
d
a
y
D
r
o
p
d
o
w
n
 
=
 
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
w
e
e
k
e
n
d
d
a
y
D
r
o
p
d
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
$
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
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
 
=
 
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
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
;

 
 
 
 
 
 
 
 
$
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
 
=
 
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
;

 
 
 
 
 
 
 
 
$
w
e
e
k
d
a
y
D
r
o
p
d
o
w
n
 
=
 
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
w
e
e
k
d
a
y
D
r
o
p
d
o
w
n
'
 
]
;

 
 
 
 
 
 
 
 
$
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
 
=
 
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
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
'
 
]
;

 
 
 
 
 
 
 
 
$
p
a
y
m
e
n
t
A
m
o
u
n
t
s
 
=
 
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
a
y
m
e
n
t
A
m
o
u
n
t
s
'
 
]
;


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
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
S
T
A
T
U
S
_
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
R
E
S
_
S
T
A
T
U
S
_
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
 
f
a
l
s
e
)
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
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
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
v
i
s
i
t
o
r
s
c
a
n
b
o
o
k
o
n
l
i
n
e
'
 
]
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
E
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
C
O
M
_
A
_
V
I
S
I
T
O
R
S
C
A
N
B
O
O
K
O
N
L
I
N
E
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
R
E
G
I
S
T
E
R
E
D
U
S
E
R
S
O
N
L
Y
B
O
O
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
A
_
R
E
G
I
S
T
E
R
E
D
U
S
E
R
S
O
N
L
Y
B
O
O
K
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
r
e
g
i
s
t
e
r
e
d
U
s
e
r
s
O
n
l
y
C
a
n
B
o
o
k
'
 
]
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
i
f
 
(
!
g
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
i
s
_
j
i
n
t
o
u
r
_
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
 
&
&
 
i
s
s
e
t
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
0
0
5
'
]
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
e
n
q
u
i
r
i
e
s
'
]
)
)
 
{

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
_
T
I
T
L
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
r
e
q
u
i
r
e
A
p
p
r
o
v
a
l
'
 
]
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
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
B
O
O
K
I
N
G
_
I
N
Q
U
I
R
Y
_
S
E
T
T
I
N
G
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	
}


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
W
H
O
L
E
D
A
Y
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
W
H
O
L
E
D
A
Y
_
T
I
T
L
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
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
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
W
H
O
L
E
D
A
Y
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
W
H
O
L
E
D
A
Y
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
H
O
L
E
D
A
Y
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
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
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
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
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
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
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
t
e
x
t
"
 
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
 
n
a
m
e
=
"
c
f
g
_
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
"
 
s
i
z
e
=
"
5
"
 
v
a
l
u
e
=
"
'
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
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
'
]
.
'
"
 
/
>
'
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
D
E
S
C
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
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
D
E
S
C
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
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
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
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
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
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
n
a
m
e
=
"
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
"
 
s
i
z
e
=
"
5
"
 
v
a
l
u
e
=
"
'
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
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
'
 
]
.
'
"
 
/
>
'
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
D
E
S
C
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
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
D
E
S
C
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
 
f
a
l
s
e
)
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
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
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
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
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
n
a
m
e
=
"
c
f
g
_
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
"
 
s
i
z
e
=
"
5
"
 
v
a
l
u
e
=
"
'
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
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
'
 
]
.
'
"
 
/
>
'
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
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
C
O
M
_
A
_
M
I
N
I
M
U
M
I
N
T
E
R
V
A
L
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
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
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
n
a
m
e
=
"
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
"
 
s
i
z
e
=
"
5
"
 
v
a
l
u
e
=
"
'
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
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
'
 
]
.
'
"
 
/
>
'
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
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
C
O
M
_
A
_
D
A
Y
S
B
E
F
O
R
E
F
I
R
S
T
B
O
O
K
I
N
G
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	
}


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
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
C
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
T
Y
P
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
n
a
m
e
=
"
c
f
g
_
d
e
f
a
u
l
t
N
u
m
b
e
r
O
f
F
i
r
s
t
G
u
e
s
t
t
y
p
e
"
 
s
i
z
e
=
"
5
"
 
v
a
l
u
e
=
"
'
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
d
e
f
a
u
l
t
N
u
m
b
e
r
O
f
F
i
r
s
t
G
u
e
s
t
t
y
p
e
'
 
]
.
'
"
 
/
>
'
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
T
Y
P
E
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
C
O
M
_
A
_
D
E
F
A
U
L
T
N
U
M
B
E
R
O
F
F
I
R
S
T
G
U
E
S
T
T
Y
P
E
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
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
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
l
i
m
i
t
A
d
v
a
n
c
e
B
o
o
k
i
n
g
s
Y
e
s
N
o
'
 
]
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
_
D
E
S
C
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
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
_
D
E
S
C
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
 
f
a
l
s
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
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
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
Y
E
S
N
O
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

	
	
}

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
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
C
O
M
_
A
_
A
D
V
A
N
C
E
B
O
O
K
I
N
G
S
L
I
M
I
T
D
A
Y
S
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
a
d
v
a
n
c
e
B
o
o
k
i
n
g
s
L
i
m
i
t
"
 
v
a
l
u
e
=
"
'
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
a
d
v
a
n
c
e
B
o
o
k
i
n
g
s
L
i
m
i
t
'
 
]
.
'
"
>
'
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
W
E
E
K
E
N
D
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
C
O
M
_
W
E
E
K
E
N
D
D
A
Y
S
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
w
e
e
k
e
n
d
d
a
y
D
r
o
p
d
o
w
n
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
W
E
E
K
E
N
D
D
A
Y
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
C
O
M
_
W
E
E
K
E
N
D
D
A
Y
S
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	

	
	
$
t
h
r
e
a
s
h
o
l
d
_
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
i
n
t
e
g
e
r
S
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
0
,
 
1
0
0
,
 
1
,
 
'
c
f
g
_
c
a
n
c
e
l
l
a
t
i
o
n
_
t
h
r
e
a
s
h
o
l
d
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
 
(
i
n
t
)
 
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
c
a
n
c
e
l
l
a
t
i
o
n
_
t
h
r
e
a
s
h
o
l
d
'
 
]
)
;


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
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
C
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
D
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
t
h
r
e
a
s
h
o
l
d
_
d
r
o
p
d
o
w
n
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
D
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
C
O
M
_
A
_
O
D
D
S
_
C
A
N
C
E
L
L
A
T
I
O
N
_
T
H
R
E
A
S
H
O
L
D
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	

	
	
i
f
 
(
!
g
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
i
s
_
j
i
n
t
o
u
r
_
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
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
H
e
a
d
i
n
g
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
H
F
I
X
E
D
_
P
E
R
I
O
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
H
F
I
X
E
D
_
P
E
R
I
O
D
S
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
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
F
I
X
E
D
P
E
R
I
O
D
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
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
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
S
C
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
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
S
C
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
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
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
F
I
X
E
D
P
E
R
I
O
D
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
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
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
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
"
 
v
a
l
u
e
=
"
'
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
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
N
u
m
b
e
r
O
f
D
a
y
s
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
N
U
M
B
E
R
O
F
P
E
R
I
O
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
N
U
M
B
E
R
O
F
P
E
R
I
O
D
S
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
n
u
m
b
e
r
o
f
F
i
x
e
d
P
e
r
i
o
d
s
"
 
v
a
l
u
e
=
"
'
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
n
u
m
b
e
r
o
f
F
i
x
e
d
P
e
r
i
o
d
s
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
S
H
O
R
T
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
F
I
X
E
D
P
E
R
I
O
D
B
O
O
K
I
N
G
S
S
H
O
R
T
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
S
H
O
R
T
B
R
E
A
K
_
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
C
O
M
_
A
_
F
I
X
E
D
P
E
R
I
O
D
_
S
H
O
R
T
B
R
E
A
K
_
D
A
Y
S
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
"
 
v
a
l
u
e
=
"
'
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
f
i
x
e
d
P
e
r
i
o
d
B
o
o
k
i
n
g
s
S
h
o
r
t
N
u
m
b
e
r
O
f
D
a
y
s
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
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
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
D
E
S
C
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
D
E
S
C
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
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
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
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
w
e
e
k
d
a
y
D
r
o
p
d
o
w
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
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
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
Y
E
S
N
O
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
D
A
Y
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
w
e
e
k
d
a
y
D
r
o
p
d
o
w
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
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

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
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
 
f
a
l
s
e
)
)
;

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
)
;

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
D
E
S
C
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
D
E
S
C
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
 
f
a
l
s
e
)
)
;

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
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
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
f
i
x
e
d
A
r
r
i
v
a
l
D
a
t
e
s
R
e
c
u
r
r
i
n
g
)
;

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
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
C
O
M
_
M
R
_
F
I
X
E
D
A
R
R
I
V
A
L
D
A
T
E
_
R
E
C
U
R
R
I
N
G
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	
	
}

 
 
 
 
 
 
 
 
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
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
j
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
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
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
H
e
a
d
i
n
g
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
H
D
E
P
O
S
I
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
H
D
E
P
O
S
I
T
S
'
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
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
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
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
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
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
c
h
a
r
g
e
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
g
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
i
s
_
j
i
n
t
o
u
r
_
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
 
&
&
 
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
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
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
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
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
d
e
p
o
s
i
t
I
s
O
n
e
N
i
g
h
t
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
F
I
R
S
T
N
I
G
H
T
C
O
S
T
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
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
j
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
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
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
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
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
d
e
p
o
s
i
t
I
s
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
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
E
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
I
S
P
E
R
C
E
N
T
A
G
E
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
m
e
s
s
a
g
e
 
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
j
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
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
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
m
e
s
s
a
g
e
 
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
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
S
E
T
T
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
R
E
S
_
C
O
N
F
I
G
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
S
E
T
T
I
N
G
'
,
 
f
a
l
s
e
)
.
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
p
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
 
]
.
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
V
A
L
U
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
A
_
D
E
P
O
S
I
T
_
V
A
L
U
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
d
e
p
o
s
i
t
V
a
l
u
e
"
 
v
a
l
u
e
=
"
'
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
d
e
p
o
s
i
t
V
a
l
u
e
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
$
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
m
e
s
s
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
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
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
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
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
'
 
]
 
=
 
0
;

	
	
	
}

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
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
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
"
 
v
a
l
u
e
=
"
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
m
i
n
i
m
u
m
_
d
e
p
o
s
i
t
_
v
a
l
u
e
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
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
C
O
M
_
A
_
M
I
N
I
M
U
M
_
D
E
P
O
S
I
T
_
V
A
L
U
E
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	
	

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
u
s
e
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
s
'
 
]
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
_
D
E
S
C
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
_
D
E
S
C
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
 
f
a
l
s
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
V
A
R
I
A
B
L
E
_
D
E
S
C
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
N
U
M
B
E
R
O
F
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
C
O
M
_
A
_
D
E
P
O
S
I
T
_
C
H
A
R
G
E
D
E
P
O
S
I
T
_
N
U
M
B
E
R
O
F
D
A
Y
S
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
'
<
i
n
p
u
t
 
t
y
p
e
=
"
n
u
m
b
e
r
"
 
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
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
_
t
h
r
e
a
s
h
o
l
d
"
 
v
a
l
u
e
=
"
'
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
v
a
r
i
a
b
l
e
_
d
e
p
o
s
i
t
_
t
h
r
e
a
s
h
o
l
d
'
 
]
.
'
"
 
/
>
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
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
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
p
a
y
m
e
n
t
A
m
o
u
n
t
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
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
O
M
_
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
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
C
O
M
_
C
H
A
R
G
I
N
G
_
C
O
N
F
I
G
_
D
E
S
C
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
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
O
M
_
A
_
D
E
P
O
S
I
T
_
D
E
P
O
S
I
T
R
O
U
N
D
U
P
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
D
E
P
O
S
I
T
_
D
E
P
O
S
I
T
R
O
U
N
D
U
P
'
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
r
o
u
n
d
u
p
D
e
p
o
s
i
t
Y
e
s
N
o
'
 
]
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
(
)
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

