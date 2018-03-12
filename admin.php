
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
_
A
D
M
I
N
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
#


o
b
_
s
t
a
r
t
(
'
r
e
m
o
v
e
B
O
M
a
d
m
i
n
'
)
;


@
i
n
i
_
s
e
t
(
'
m
a
x
_
e
x
e
c
u
t
i
o
n
_
t
i
m
e
'
,
 
'
4
8
0
'
)
;


r
e
q
u
i
r
e
_
o
n
c
e
 
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
.
'
/
i
n
t
e
g
r
a
t
i
o
n
.
p
h
p
'
;


t
r
y
 
{

 
 
 
 
/
/
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
 
o
b
j
e
c
t

 
 
 
 
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


 
 
 
 
/
/
s
i
t
e
 
c
o
n
f
i
g
 
o
b
j
e
c
t

 
 
 
 
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

	

	
/
/
r
e
q
u
e
s
t
 
l
o
g

	
i
f
 
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
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
]
 
=
=
 
'
d
e
v
e
l
o
p
m
e
n
t
'
)
 
{

	
	
r
e
q
u
e
s
t
_
l
o
g
(
)
;

	
}


 
 
 
 
/
/
g
e
t
 
a
l
l
 
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
 
i
n
 
s
y
s
t
e
m
.

 
 
 
 
$
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
i
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
-
>
g
e
t
_
a
l
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
(
)
;


 
 
 
 
/
/
l
a
n
g
u
a
g
e
 
o
b
j
e
c
t
 
-
 
l
o
a
d
 
d
e
f
a
u
l
t
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
f
o
r
 
c
o
n
t
e
x
t

 
 
 
 
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
 
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
l
a
n
g
u
a
g
e
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
l
a
n
g
u
a
g
e
-
>
g
e
t
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
;


 
 
 
 
/
/
c
u
s
t
o
m
 
t
e
x
t
 
o
b
j
e
c
t

 
 
 
 
$
c
u
s
t
o
m
T
e
x
t
O
b
j
 
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
c
u
s
t
o
m
_
t
e
x
t
'
)
;

	

	
/
/
t
r
i
g
g
e
r
 
0
0
0
0
1
 
e
v
e
n
t

	
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
0
1
'
)
;


 
 
 
 
/
/
t
r
i
g
g
e
r
 
0
0
0
0
2
 
e
v
e
n
t

 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
0
2
'
)
;


 
 
 
 
/
/
u
s
e
r
 
o
b
j
e
c
t

 
 
 
 
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


 
 
 
 
/
/
i
n
p
u
t
 
f
i
l
t
e
r
i
n
g

 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
0
3
'
)
;


 
 
 
 
/
/
c
r
o
n
 
j
o
b
s

 
 
 
 
$
c
r
o
n
 
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
r
o
n
'
)
;

 
 
 
 
i
f
 
(
$
c
r
o
n
-
>
m
e
t
h
o
d
 
=
=
 
'
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
'
 
&
&
 
!
A
J
A
X
C
A
L
L
)
 
{

 
 
 
 
 
 
 
 
$
c
r
o
n
-
>
t
r
i
g
g
e
r
J
o
b
s
(
)
;

 
 
 
 
}


 
 
 
 
/
/
s
e
s
s
i
o
n

 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
i
n
i
t
B
o
o
k
i
n
g
S
e
s
s
i
o
n
(
)
;


 
 
 
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
g
e
t
J
o
m
r
e
s
s
e
s
s
i
o
n
(
)
;

 
 
 
 
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
j
o
m
r
e
s
s
e
s
s
i
o
n
'
,
 
$
j
o
m
r
e
s
s
e
s
s
i
o
n
)
;


 
 
 
 
/
/
s
e
t
 
t
a
s
k
 
s
h
o
w
t
i
m
e

 
 
 
 
$
t
a
s
k
 
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
t
a
s
k
'
,
 
'
c
p
a
n
e
l
'
)
;

 
 
 
 
$
t
a
s
k
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
6
0
;
x
&
#
6
2
;
'
,
 
'
'
,
 
$
t
a
s
k
)
;

 
 
 
 
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
t
a
s
k
'
,
 
$
t
a
s
k
)
;


 
 
 
 
/
/
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
n
v
e
r
s
i
o
n
 
o
b
j
e
c
t

 
 
 
 
$
j
o
m
r
e
s
_
c
u
r
r
e
n
c
y
_
e
x
c
h
a
n
g
e
_
r
a
t
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
c
u
r
r
e
n
c
y
_
e
x
c
h
a
n
g
e
_
r
a
t
e
s
'
)
;

	

	
/
/
s
e
t
 
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
 
t
o
 
t
h
e
 
a
p
p
r
o
p
r
i
a
t
e
 
o
n
e
 
f
o
r
 
t
h
e
 
d
e
t
e
c
t
e
d
 
l
o
c
a
t
i
o
n

	
$
j
o
m
r
e
s
_
g
e
o
l
o
c
a
t
i
o
n
 
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
g
e
o
l
o
c
a
t
i
o
n
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
g
e
o
l
o
c
a
t
i
o
n
-
>
a
u
t
o
_
s
e
t
_
u
s
e
r
_
c
u
r
r
e
n
c
y
_
c
o
d
e
(
)
;


 
 
 
 
r
e
q
u
i
r
e
_
o
n
c
e
 
J
O
M
R
E
S
_
F
U
N
C
T
I
O
N
S
_
A
B
S
P
A
T
H
.
'
s
i
t
e
c
o
n
f
i
g
.
f
u
n
c
t
i
o
n
s
.
p
h
p
'
;


	
i
f
 
(
!
A
J
A
X
C
A
L
L
)
 
{

	
	
/
/
a
d
d
 
j
a
v
a
s
c
r
i
p
t
 
t
o
 
h
e
a
d

	
	
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
0
4
'
)
;

	
	

	
	
/
/
c
o
r
e
 
f
r
o
n
t
e
n
d
 
m
e
n
u
 
i
t
e
m
s

	
	
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
9
9
9
5
'
,
 
'
m
e
n
u
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
 
/
/
R
o
d
 
r
e
a
l
l
y
 
n
e
e
d
s
 
t
h
e
m

	
	

	
	
/
/
c
o
r
e
 
a
d
m
i
n
 
m
e
n
u
 
i
t
e
m
s

	
	
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
9
9
9
5
'
,
 
'
m
e
n
u
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


 
 
 
 
/
/
0
0
0
0
5
 
t
r
i
g
g
e
r
 
p
o
i
n
t

 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
0
0
0
5
'
)
;


 
 
 
 
i
f
 
(
!
A
J
A
X
C
A
L
L
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

	
	

	
	
/
/
g
e
n
e
r
a
t
e
 
t
h
e
 
c
p
a
n
e
l
 
m
e
n
u

	
	
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
9
9
9
7
'
,
 
'
m
e
n
u
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

	
	
$
o
u
t
p
u
t
[
 
'
C
O
N
T
R
O
L
_
P
A
N
E
L
_
M
E
N
U
'
 
]
 
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
m
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
D
a
t
a
[
 
'
1
9
9
9
7
'
 
]
[
 
'
m
e
n
u
'
 
]
;


 
 
 
 
 
 
 
 
/
/
f
r
e
q
u
e
n
t
l
y
 
a
s
k
e
d
 
q
u
e
s
t
i
o
n
s

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
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
A
Q
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
A
Q
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
A
Q
'
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
v
i
d
e
o
 
t
u
t
o
r
i
a
l
s

	
	
$
j
o
m
r
e
s
_
v
i
d
e
o
_
t
u
t
o
r
i
a
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
j
o
m
r
e
s
_
v
i
d
e
o
_
t
u
t
o
r
i
a
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
v
i
d
e
o
_
t
u
t
o
r
i
a
l
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

	
	
$
o
u
t
p
u
t
[
 
'
V
I
D
E
O
_
T
U
T
O
R
I
A
L
S
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
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
-
>
b
u
i
l
d
_
m
o
d
a
l
(
)
;

 
 
 
 
 
 
 
 

	
	
/
/
m
a
n
a
g
e
 
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
 
b
u
t
t
o
n

 
 
 
 
 
 
 
 
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
N
A
G
E
_
P
R
O
P
E
R
T
I
E
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
M
A
N
A
G
E
_
P
R
O
P
E
R
T
I
E
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
M
A
N
A
G
E
_
P
R
O
P
E
R
T
I
E
S
'
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
l
a
n
g
u
a
g
e
 
d
r
o
p
d
o
w
n

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
N
G
D
R
O
P
D
O
W
N
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
l
a
n
g
u
a
g
e
-
>
g
e
t
_
l
a
n
g
u
a
g
e
s
e
l
e
c
t
i
o
n
_
d
r
o
p
d
o
w
n
(
)
;


	
	
/
/
c
h
e
c
k
 
j
o
m
r
e
s
 
s
u
p
p
o
r
t
 
k
e
y

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
L
I
C
E
N
S
E
_
W
A
R
N
I
N
G
'
]
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
6
0
0
0
'
,
 
'
s
h
o
w
_
l
i
c
e
n
s
e
_
m
e
s
s
a
g
e
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
e
,
 
'
a
s
_
m
o
d
a
l
'
 
=
>
 
f
a
l
s
e
)
)
;


	
	
/
/
b
o
o
t
s
t
r
a
p

	
	
$
o
u
t
p
u
t
[
 
'
U
S
I
N
G
_
B
O
O
T
S
T
R
A
P
'
 
]
 
=
 
'
t
r
u
e
'
;


 
 
 
 
 
 
 
 
i
f
 
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
i
n
_
f
r
o
n
t
e
n
d
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
o
u
t
p
u
t
[
'
B
O
O
T
S
T
R
A
P
_
W
A
R
N
I
N
G
'
]
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
6
0
0
0
'
,
 
'
s
h
o
w
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
w
a
r
n
i
n
g
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
 
R
e
v
i
e
w
 
m
e
s
s
a
g
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
R
E
V
I
E
W
_
R
E
Q
U
E
S
T
'
]
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
6
0
0
0
'
,
 
'
s
h
o
w
_
r
e
v
i
e
w
s
_
m
e
s
s
a
g
e
'
,
 
a
r
r
a
y
(
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
 
=
>
 
f
a
l
s
e
)
)
;

	
	

 
 
 
 
 
 
 
 
/
/
o
u
t
p
u
t
 
t
o
p
 
a
r
e
a

 
 
 
 
 
 
 
 
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
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
i
f
 
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
=
=
 
'
j
o
o
m
l
a
3
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
a
d
m
i
n
i
s
t
r
a
t
o
r
_
c
o
n
t
e
n
t
_
a
r
e
a
_
t
o
p
_
v
e
r
t
i
c
a
l
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
a
d
m
i
n
i
s
t
r
a
t
o
r
_
c
o
n
t
e
n
t
_
a
r
e
a
_
t
o
p
.
h
t
m
l
'
)
;

	
	
}

 
 
 
 
 
 
 
 
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
a
d
m
i
n
s
_
f
i
r
s
t
_
r
u
n
(
)
;


 
 
 
 
/
/
t
a
s
k

 
 
 
 
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
e
v
e
n
t
S
p
e
c
i
f
i
c
l
y
E
x
i
s
t
s
C
h
e
c
k
(
'
1
6
0
0
0
'
,
 
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
t
a
s
k
'
)
)
)
 
{

	
	

	
	
/
/
 
J
o
m
r
e
s
 
9
.
9
.
1
8
 
s
p
e
c
i
f
i
c
 
c
o
d
e
,
 
w
e
 
n
e
e
d
 
t
o
 
c
h
e
c
k
 
t
o
 
s
e
e
 
i
f
 
t
h
e
 
t
a
s
k
 
=
=
 
s
h
o
w
p
l
u
g
i
n
s
,
 
a
n
d
 
i
f
 
s
o
 
d
o
u
b
l
e
 
c
h
e
c
k
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
'
s
 
v
e
r
s
i
o
n
.
 
I
f
 
i
t
'
s
 
<
 
1
.
9
 
w
e
 
n
e
e
d
 
t
o
 
f
o
r
c
e
 
a
n
 
u
p
d
a
t
e
 
o
f
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
b
e
f
o
r
e
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
s
c
r
i
p
t
 
c
a
n
 
b
e
 
s
h
o
w
n

	
	
/
/
 
W
i
t
h
o
u
t
 
t
h
i
s
 
c
h
e
c
k
 
a
n
d
 
f
o
r
c
e
 
o
f
 
t
h
e
 
r
e
i
n
s
t
a
l
l
a
t
i
o
n
 
o
f
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
,
 
u
s
e
r
s
 
w
i
l
l
 
o
n
l
y
 
b
e
 
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
t
h
e
 
4
0
 
o
r
 
s
o
 
p
l
u
g
i
n
s
 
o
n
e
 
b
y
 
o
n
e
,
 
w
h
i
c
h
 
w
o
u
l
d
 
b
e
 
a
 
s
i
g
n
i
f
i
c
a
n
t
 
a
n
n
o
y
a
n
c
e
.

	
	
/
/
 
T
o
d
o
 
r
e
m
o
v
e
 
s
o
m
e
t
i
m
e
 
a
f
t
e
r
 
J
a
n
u
a
r
y
 
2
0
1
9

	
	
i
f
 
(
 
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
t
a
s
k
'
)
 
=
=
 
"
s
h
o
w
p
l
u
g
i
n
s
"
 
)
 
{

	
	
	
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
1
6
0
0
0
'
]
[
'
s
h
o
w
p
l
u
g
i
n
s
'
]
[
'
e
v
e
n
t
t
y
p
e
'
]
 
=
=
 
"
c
o
r
e
-
p
l
u
g
i
n
"
)
 
{

	
	
	
	
r
e
q
u
i
r
e
_
o
n
c
e
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
1
6
0
0
0
'
]
[
'
s
h
o
w
p
l
u
g
i
n
s
'
]
[
'
f
i
l
e
p
a
t
h
'
]
.
"
p
l
u
g
i
n
_
i
n
f
o
.
p
h
p
"
)
;

	
	
	
	
$
p
l
u
g
i
n
_
i
n
f
o
_
p
l
u
g
i
n
_
m
a
n
a
g
e
r
 
=
 
n
e
w
 
p
l
u
g
i
n
_
i
n
f
o
_
p
l
u
g
i
n
_
m
a
n
a
g
e
r
(
)
;

	
	
	
	
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
"
.
"
 
,
 
$
p
l
u
g
i
n
_
i
n
f
o
_
p
l
u
g
i
n
_
m
a
n
a
g
e
r
-
>
d
a
t
a
[
'
v
e
r
s
i
o
n
'
]
 
)
;

	
	
	
	
i
f
 
(
 
$
b
a
n
g
 
[
0
]
 
<
=
 
2
 
)
 
{

	
	
	
	
	
i
f
 
(
$
b
a
n
g
 
[
1
]
 
<
=
 
1
)
 
{

	
	
	
	
	
	
/
/
 
T
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
i
s
 
a
l
r
e
a
d
y
 
i
n
s
t
a
l
l
e
d
,
 
w
e
 
n
e
e
d
 
t
o
 
r
e
s
e
t
 
t
h
e
 
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
 
 
J
o
m
r
e
s
 
r
e
v
e
r
t
s
 
b
a
c
k
 
t
o
 
u
s
i
n
g
 
t
h
e
 
d
e
f
a
u
l
t
 
v
e
r
s
i
o
n
 
o
f
 
t
h
e
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
,
 
w
h
i
c
h
 
f
o
r
c
e
s
 
d
o
w
n
l
o
a
d
 
o
f
 
t
h
e
 
"
r
e
a
l
"
 
p
l
u
g
i
n
 
m
a
n
a
g
e
r
 
f
r
o
m
 
t
h
e
 
p
l
u
g
i
n
 
s
e
r
v
e
r

	
	
	
	
	
	
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
1
6
0
0
0
'
]
[
'
s
h
o
w
p
l
u
g
i
n
s
'
]
[
'
r
e
a
l
_
f
i
l
e
p
a
t
h
'
]
	
	
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
1
6
0
0
0
'
]
[
'
s
h
o
w
p
l
u
g
i
n
s
'
]
[
'
f
i
l
e
p
a
t
h
'
]
;

	
	
	
	
	
	
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
1
6
0
0
0
'
]
[
'
s
h
o
w
p
l
u
g
i
n
s
'
]
[
'
f
i
l
e
p
a
t
h
'
]
	
	
	
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
1
'
]
[
'
s
t
a
r
t
'
]
[
'
f
i
l
e
p
a
t
h
'
]
;

	
	
	
	
	
	
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
1
6
0
0
0
'
]
[
'
s
h
o
w
p
l
u
g
i
n
s
'
]
[
'
e
v
e
n
t
t
y
p
e
'
]
	
	
	
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
1
'
]
[
'
s
t
a
r
t
'
]
[
'
e
v
e
n
t
t
y
p
e
'
]
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}

	
	
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
6
0
0
0
'
,
 
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
t
a
s
k
'
)
)
;
 
/
/
 
t
a
s
k
 
e
x
i
s
t
s
,
 
e
x
e
c
u
t
e
 
i
t

	
}
 
e
l
s
e
 
{

	
	
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
r
i
g
g
e
r
E
v
e
n
t
(
'
1
0
0
0
1
'
)
;
 
/
/
t
a
s
k
 
d
o
e
s
n
`
t
 
e
x
i
s
t
,
 
g
o
 
t
o
 
c
p
a
n
e
l
 
f
r
o
n
t
p
a
g
e

	
}


 
 
 
 
/
/
o
u
t
p
u
t
 
b
o
t
t
o
m
 
a
r
e
a

 
 
 
 
i
f
 
(
!
A
J
A
X
C
A
L
L
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
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
i
f
 
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
 
=
=
 
'
j
o
o
m
l
a
3
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
a
d
m
i
n
i
s
t
r
a
t
o
r
_
c
o
n
t
e
n
t
_
a
r
e
a
_
b
o
t
t
o
m
_
v
e
r
t
i
c
a
l
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
a
d
m
i
n
i
s
t
r
a
t
o
r
_
c
o
n
t
e
n
t
_
a
r
e
a
_
b
o
t
t
o
m
.
h
t
m
l
'
)
;

	
	
}

 
 
 
 
 
 
 
 
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
t
r
i
g
g
e
r
 
9
9
9
9
8
 
e
v
e
n
t
 
-
 
j
o
m
r
e
s
 
f
e
e
d
b
a
c
k
 
m
e
s
s
a
g
e
s

	
i
f
 
(
!
A
J
A
X
C
A
L
L
)
 
{

	
	
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
r
i
g
g
e
r
E
v
e
n
t
(
'
9
9
9
9
8
'
)
;

	
}


 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
9
9
9
9
9
'
,
 
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
;

	

	
/
/
c
l
o
s
e
/
s
a
v
e
 
j
o
m
r
e
s
 
s
e
s
s
i
o
n

 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
c
l
o
s
e
_
j
o
m
r
e
s
_
s
e
s
s
i
o
n
(
)
;


 
 
 
 
/
/
d
o
n
e

 
 
 
 
e
n
d
r
u
n
(
)
;

}
 
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

 
 
 
 
o
u
t
p
u
t
_
f
a
t
a
l
_
e
r
r
o
r
(
$
e
)
;

}


i
f
 
(
d
e
f
i
n
e
d
(
'
J
O
M
R
E
S
_
R
E
T
U
R
N
D
A
T
A
'
)
)
 
{

 
 
 
 
$
c
o
n
t
e
n
t
s
 
=
 
o
b
_
g
e
t
_
c
o
n
t
e
n
t
s
(
)
;

 
 
 
 
$
c
o
n
t
e
n
t
s
 
=
 
$
h
e
a
d
_
c
o
n
t
e
n
t
s
.
$
c
o
n
t
e
n
t
s
;

 
 
 
 
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
R
E
T
U
R
N
D
A
T
A
_
C
O
N
T
E
N
T
'
,
 
$
c
o
n
t
e
n
t
s
)
;

 
 
 
 
u
n
s
e
t
(
$
c
o
n
t
e
n
t
s
)
;

 
 
 
 
o
b
_
e
n
d
_
c
l
e
a
n
(
)
;

}
 
e
l
s
e
 
{

 
 
 
 
o
b
_
e
n
d
_
f
l
u
s
h
(
)
;

}


/
/
 
J
o
m
r
e
s
 
4
.
7
.
8
 
s
t
r
i
p
s
 
B
O
M
 
f
r
o
m
 
a
l
l
 
a
r
e
a
s
 
o
f
 
t
h
e
 
o
u
t
p
u
t
,
 
n
o
t
 
j
u
s
t
 
t
h
e
 
b
e
g
i
n
n
i
n
g
.

f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
B
O
M
a
d
m
i
n
(
$
s
t
r
 
=
 
'
'
)

{

 
 
 
 
$
b
o
m
 
=
 
p
a
c
k
(
'
C
C
C
'
,
 
0
x
e
f
,
 
0
x
b
b
,
 
0
x
b
f
)
;

 
 
 
 
$
s
t
r
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
$
b
o
m
,
 
'
'
,
 
$
s
t
r
)
;


 
 
 
 
/
/
 
i
f
(
s
u
b
s
t
r
(
$
s
t
r
,
 
0
,
3
)
 
=
=
 
p
a
c
k
(
"
C
C
C
"
,
0
x
e
f
,
0
x
b
b
,
0
x
b
f
)
)

 
 
 
 
/
/
 
{

 
 
 
 
/
/
 
$
s
t
r
=
s
u
b
s
t
r
(
$
s
t
r
,
 
3
)
;

 
 
 
 
/
/
 
}

 
 
 
 
r
e
t
u
r
n
 
$
s
t
r
;

}

