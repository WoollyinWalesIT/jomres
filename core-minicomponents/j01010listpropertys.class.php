
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
1
0
1
0
l
i
s
t
p
r
o
p
e
r
t
y
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
1
0
0
8
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
 
o
p
t
i
o
n
a
l


	
	
$
d
a
t
a
_
o
n
l
y
 
	
	
	
	
	
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
d
a
t
a
o
n
l
y
'
,
 
f
a
l
s
e
)
;

	
	
$
p
r
o
p
e
r
t
y
l
i
s
t
_
l
a
y
o
u
t
 
	
	
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
r
o
p
e
r
t
y
l
i
s
t
_
l
a
y
o
u
t
'
,
 
'
'
)
;

	
	
$
t
h
i
s
-
>
j
r
_
p
a
g
e
 
	
	
	
	
	
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
j
r
_
p
a
g
e
'
,
 
0
)
;

	
	
$
r
e
t
u
r
n
_
t
o
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
 
	
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
r
e
t
u
r
n
_
t
o
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
'
,
 
f
a
l
s
e
)
;

	
	
$
a
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
a
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
'
,
 
'
'
)
;

	
	
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
	
	
	
	
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
d
e
p
a
r
t
u
r
e
D
a
t
e
'
,
 
'
'
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
s
t
a
y
D
a
y
s
 
=
 
1
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
&
&
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
!
=
 
'
'
 
&
&
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
)
 
{

	
	
	
$
s
t
a
r
t
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
]
;

	
	
	
$
e
n
d
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
]
;


	
	
	
$
r
a
n
g
e
 
=
 
g
e
t
_
p
e
r
i
o
d
s
(
$
s
t
a
r
t
,
 
$
e
n
d
)
;

	
	
	
$
s
t
a
y
D
a
y
s
 
=
 
c
o
u
n
t
(
$
r
a
n
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
)
 
&
&

	
	
	
	
(
i
s
s
e
t
(
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
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
'
]
)
 
&
&
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
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
'
]
 
!
=
 
'
'
)
 
&
&

	
	
	
	
(
i
s
s
e
t
(
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
)
 
&
&
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
 
!
=
 
'
'
)

	
	
	
	
)
 
{

	
	
	
$
s
t
a
r
t
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
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
'
]
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;

	
	
	
$
e
n
d
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;


	
	
	
$
r
a
n
g
e
 
=
 
g
e
t
_
p
e
r
i
o
d
s
(
$
s
t
a
r
t
,
 
$
e
n
d
)
;

	
	
	
$
s
t
a
y
D
a
y
s
 
=
 
c
o
u
n
t
(
$
r
a
n
g
e
)
;

	
	
}


	
	
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
)
)
 
{

	
	
	
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
 
=
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
_
d
e
f
a
u
l
t
'
 
]
;

	
	
}


	
	
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
l
i
s
t
_
l
a
y
o
u
t
s
 
=
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
'
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
)
 
=
=
 
1
)
 
{

	
	
	
$
d
e
f
a
u
l
t
_
l
a
y
o
u
t
 
=
 
a
r
r
a
y
_
k
e
y
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
l
i
s
t
_
l
a
y
o
u
t
s
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
 
=
 
$
d
e
f
a
u
l
t
_
l
a
y
o
u
t
[
 
0
 
]
;

	
	
}


	
	
$
l
a
y
o
u
t
_
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
a
l
l
_
l
a
y
o
u
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
(
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
N
O
H
T
M
L
'
)
 
&
&
 
J
O
M
R
E
S
_
N
O
H
T
M
L
 
=
=
 
0
)
 
|
|
 
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
 
'
a
j
a
x
_
s
e
a
r
c
h
_
f
i
l
t
e
r
'
)
 
&
&
 
c
o
u
n
t
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
l
i
s
t
_
l
a
y
o
u
t
s
)
 
>
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
 
a
s
 
$
k
e
y
 
=
>
 
$
l
a
y
o
u
t
s
)
 
{

	
	
	
	
$
a
l
l
_
l
a
y
o
u
t
s
[
 
]
 
=
 
$
k
e
y
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
 
$
l
a
y
o
u
t
s
[
 
'
t
i
t
l
e
'
 
]
;

	
	
	
	
$
r
[
 
'
L
I
N
K
'
 
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
l
i
s
t
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
&
p
r
o
p
e
r
t
y
l
i
s
t
_
l
a
y
o
u
t
=
'
.
$
k
e
y
)
;

	
	
	
	
$
l
a
y
o
u
t
_
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
l
i
s
t
_
l
a
y
o
u
t
 
!
=
 
'
'
 
&
&
 
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
p
r
o
p
e
r
t
y
l
i
s
t
_
l
a
y
o
u
t
,
 
$
a
l
l
_
l
a
y
o
u
t
s
)
)
 
{

	
	
	
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
 
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
l
i
s
t
_
l
a
y
o
u
t
;

	
	
}

	
	
$
l
a
y
o
u
t
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
;


	
	
$
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


	
	
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
 
=
 
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
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
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
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
 
]
)
 
&
&
 
i
s
_
n
u
l
l
(
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
)
)
 
{

	
	
	
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
 
=
 
(
b
o
o
l
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
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
]
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
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
 
]
)
)
 
{

	
	
	
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
 
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
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
 
]
;

	
	
}


	
	
$
s
h
o
w
_
p
a
g
i
n
g
 
=
 
f
a
l
s
e
;

	
	
i
f
 
(
!
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
 
|
|
 
(
A
J
A
X
C
A
L
L
 
&
&
 
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
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
]
 
=
=
 
'
0
'
)
)
 
{

	
	
	
$
s
h
o
w
_
p
a
g
i
n
g
 
=
 
t
r
u
e
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
s
_
u
i
d
s
 
=
=
 
'
'
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
s
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
;

	
	
}


	
	
/
*
 
i
f
 
(
!
@
s
e
s
s
i
o
n
_
s
t
a
r
t
(
)
)
 
{

	
	
	
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
s
e
s
s
i
o
n
.
s
a
v
e
_
h
a
n
d
l
e
r
'
,
 
'
f
i
l
e
s
'
)
;

	
	
	
s
e
s
s
i
o
n
_
s
t
a
r
t
(
)
;

	
	
}
 
*
/


	
	
i
f
 
(
 
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
l
i
s
t
_
l
a
y
o
u
t
 
!
=
 
'
'
 
|
|
 
$
t
h
i
s
-
>
j
r
_
p
a
g
e
 
>
 
0
 
|
|
 
$
r
e
t
u
r
n
_
t
o
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
a
j
a
x
_
l
i
s
t
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
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
s
_
u
i
d
s
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
a
j
a
x
_
l
i
s
t
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
'
 
]
;

	
	
}


	
	
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
;

	
	
}


	
	
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
 
|
|
 
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
 
'
a
j
a
x
_
s
e
a
r
c
h
_
f
i
l
t
e
r
'
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
s
_
u
i
d
s
 
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
1
0
0
9
'
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
s
_
u
i
d
s
'
 
=
>
 
$
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
s
)
)
;
 
/
/
 
P
r
e
 
l
i
s
t
 
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
 
p
a
r
s
e
r
.
 
A
l
l
o
w
s
 
u
s
 
t
o
 
t
o
 
f
i
l
t
e
r
 
p
r
o
p
e
r
t
y
 
l
i
s
t
s
 
i
f
 
r
e
q
u
i
r
e
d

	
	
	
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
a
j
a
x
_
l
i
s
t
_
s
e
a
r
c
h
_
r
e
s
u
l
t
s
'
 
]
 
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
s
_
u
i
d
s
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
[
 
$
l
a
y
o
u
t
 
]
[
 
'
c
u
s
t
o
m
_
t
a
s
k
'
 
]
)
)
 
{

	
	
	
$
n
e
w
_
t
a
s
k
 
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
l
i
s
t
_
l
a
y
o
u
t
s
[
 
$
l
a
y
o
u
t
 
]
[
 
'
c
u
s
t
o
m
_
t
a
s
k
'
 
]
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
n
e
w
_
t
a
s
k
)
;

	
	
	
e
c
h
o
 
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
6
0
0
0
'
,
 
$
n
e
w
_
t
a
s
k
,
 
a
r
r
a
y
(
'
l
a
y
o
u
t
_
r
o
w
s
'
 
=
>
 
$
l
a
y
o
u
t
_
r
o
w
s
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
s
'
 
=
>
 
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

	
	
}
 
e
l
s
e
 
{

	
	
	
$
s
h
o
r
t
l
i
s
t
_
i
t
e
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
'
 
]
)
)
 
{

	
	
	
	
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
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
c
o
m
p
_
m
u
f
a
v
o
u
r
i
t
e
s
 
W
H
E
R
E
 
`
m
y
_
i
d
`
 
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

	
	
	
	
$
p
r
o
p
y
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
r
o
p
y
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
p
r
o
p
y
s
 
a
s
 
$
p
)
 
{

	
	
	
	
	
	
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
p
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
 
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
)
)
 
{

	
	
	
	
	
	
	
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
[
]
 
=
 
(
i
n
t
)
 
$
p
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
'
 
]
 
=
 
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
;

	
	
	
	
}

	
	
	
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
[
 
$
l
a
y
o
u
t
 
]
[
 
'
l
a
y
o
u
t
'
 
]
)
)
 
{

	
	
	
	
$
l
a
y
o
u
t
_
t
e
m
p
l
a
t
e
 
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
l
i
s
t
_
l
a
y
o
u
t
s
[
 
$
l
a
y
o
u
t
 
]
[
 
'
l
a
y
o
u
t
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
l
a
y
o
u
t
_
t
e
m
p
l
a
t
e
 
=
 
'
l
i
s
t
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
.
h
t
m
l
'
;

	
	
	
}


	
	
	
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
[
 
$
l
a
y
o
u
t
 
]
[
 
'
p
a
t
h
'
 
]
)
)
 
{

	
	
	
	
$
l
a
y
o
u
t
_
p
a
t
h
_
t
o
_
t
e
m
p
l
a
t
e
 
=
 
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
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
l
a
y
o
u
t
_
p
a
t
h
_
t
o
_
t
e
m
p
l
a
t
e
 
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
l
i
s
t
_
l
a
y
o
u
t
s
[
 
$
l
a
y
o
u
t
 
]
[
 
'
p
a
t
h
'
 
]
;

	
	
	
}


	
	
	
i
f
 
(
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
)
 
{

	
	
	
	
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
a
d
d
h
e
a
d
d
a
t
a
(
'
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
'
,
 
J
O
M
R
E
S
_
J
S
_
R
E
L
P
A
T
H
,
 
'
j
q
u
e
r
y
.
l
i
v
e
q
u
e
r
y
.
j
s
'
)
;

	
	
	
}


	
	
	
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
i
s
_
s
i
n
g
l
e
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
a
r
r
i
v
a
l
_
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
a
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
 
!
=
 
'
'
)
 
{

	
	
	
	
	
$
a
r
r
i
v
a
l
_
c
l
a
u
s
e
 
=
 
'
&
a
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
=
'
.
$
a
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
.
'
&
d
e
p
a
r
t
u
r
e
D
a
t
e
=
'
.
$
d
e
p
a
r
t
u
r
e
D
a
t
e
;

	
	
	
	
}

	
	
	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
g
e
t
_
b
o
o
k
i
n
g
_
u
r
l
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
s
_
u
i
d
s
[
 
0
 
]
,
 
'
'
,
 
$
a
r
r
i
v
a
l
_
c
l
a
u
s
e
)
,
 
'
'
)
;

	
	
	
}


	
	
	
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
u
s
e
_
b
u
d
g
e
t
_
f
e
a
t
u
r
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
u
s
e
_
b
u
d
g
e
t
_
f
e
a
t
u
r
e
'
]
 
=
 
'
1
'
;

	
	
	
}


	
	
	
$
b
u
d
g
e
t
_
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

	
	
	
i
f
 
(
u
s
i
n
g
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
(
)
 
&
&
 
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
u
d
g
e
t
_
f
e
a
t
u
r
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
o
m
r
e
s
_
u
s
e
r
_
b
u
d
g
e
t
'
)
;

	
	
	
	
$
b
u
d
g
e
t
 
=
 
n
e
w
 
j
o
m
r
e
s
_
u
s
e
r
_
b
u
d
g
e
t
(
)
;


	
	
	
	
$
b
u
d
g
e
t
_
o
u
t
p
u
t
[
0
]
[
'
B
U
D
G
E
T
_
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
b
u
d
g
e
t
-
>
g
e
t
_
b
u
d
g
e
t
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
s
)
)
 
{

	
	
	
	
$
h
e
a
d
e
r
_
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
h
e
a
d
e
r
_
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
D
A
T
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
 
f
a
l
s
e
)
;

	
	
	
	
$
h
e
a
d
e
r
_
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
D
A
T
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
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
'
]
)
)
 
{

	
	
	
	
	
$
h
e
a
d
e
r
_
o
u
t
p
u
t
[
 
'
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
'
 
]
 
=
 
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
a
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
'
,
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
a
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
'
]
,
 
'
a
d
'
,
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
)
)
 
{

	
	
	
	
	
$
h
e
a
d
e
r
_
o
u
t
p
u
t
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
D
A
T
E
'
 
]
 
=
 
g
e
n
e
r
a
t
e
D
a
t
e
I
n
p
u
t
(
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
,
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
[
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
]
,
 
f
a
l
s
e
,
 
t
r
u
e
,
 
f
a
l
s
e
)
;

	
	
	
	
}

	
	
	
	
$
h
e
a
d
e
r
_
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
E
A
R
C
H
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
S
E
A
R
C
H
_
B
U
T
T
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
S
E
A
R
C
H
_
B
U
T
T
O
N
'
)
;

	
	
	
	
i
f
 
(
!
u
s
i
n
g
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
(
)
)
 
{

	
	
	
	
	
$
h
e
a
d
e
r
_
o
u
t
p
u
t
[
 
'
T
H
E
B
U
T
T
O
N
'
 
]
 
=
 
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
s
u
b
m
i
t
"
 
n
a
m
e
=
"
s
e
n
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
E
A
R
C
H
_
B
U
T
T
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
S
E
A
R
C
H
_
B
U
T
T
O
N
'
,
 
f
a
l
s
e
)
.
'
"
 
c
l
a
s
s
=
"
b
u
t
t
o
n
"
 
/
>
'
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
h
e
a
d
e
r
_
o
u
t
p
u
t
[
 
'
T
H
E
B
U
T
T
O
N
'
 
]
 
=
 
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
s
u
b
m
i
t
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
p
r
i
m
a
r
y
"
 
n
a
m
e
=
"
s
e
n
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
E
A
R
C
H
_
B
U
T
T
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
S
E
A
R
C
H
_
B
U
T
T
O
N
'
,
 
f
a
l
s
e
)
.
'
"
 
/
>
'
;

	
	
	
	
}


	
	
	
	
$
h
e
a
d
e
r
_
o
u
t
p
u
t
[
 
'
O
R
D
E
R
_
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
o
r
d
e
r
_
d
r
o
p
d
o
w
n
'
)
;

	
	
	
	
$
h
e
a
d
e
r
_
o
u
t
p
u
t
[
 
'
C
L
I
C
K
T
O
H
I
D
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
H
I
D
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
H
I
D
E
'
,
 
f
a
l
s
e
)
;

	
	
	
	
$
h
e
a
d
e
r
_
o
u
t
p
u
t
[
 
'
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
 
f
a
l
s
e
)
;


	
	
	
	
$
c
o
m
p
a
r
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
s
h
o
r
t
l
i
s
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

	
	
	
	
i
f
 
(
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
N
O
H
T
M
L
'
)
 
&
&
 
J
O
M
R
E
S
_
N
O
H
T
M
L
 
=
=
 
0
)
 
|
|
 
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
 
'
a
j
a
x
_
s
e
a
r
c
h
_
f
i
l
t
e
r
'
)
 
{

	
	
	
	
	
$
c
o
m
p
a
r
e
[
]
 
=
 
a
r
r
a
y
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
P
A
R
E
'
 
=
>
 
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
P
A
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
P
A
R
E
'
,
 
f
a
l
s
e
)
,
 
'
C
O
M
P
A
R
E
L
I
N
K
'
 
=
>
 
'
<
s
c
r
i
p
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
/
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
"
>
v
a
r
 
c
o
m
p
a
r
e
_
u
r
l
 
=
 
"
'
.
j
o
m
r
e
s
U
R
L
(
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
_
N
O
S
E
F
.
'
&
t
a
s
k
=
c
o
m
p
a
r
e
'
)
.
'
"
;
<
/
s
c
r
i
p
t
>
'
)
;

	
	
	
	
	
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
 
!
=
 
'
s
h
o
w
_
s
h
o
r
t
l
i
s
t
e
d
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
 
{

	
	
	
	
	
	
$
s
h
o
r
t
l
i
s
t
[
]
 
=
 
a
r
r
a
y
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
V
I
E
W
S
H
O
R
T
L
I
S
T
'
 
=
>
 
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
V
I
E
W
S
H
O
R
T
L
I
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
V
I
E
W
S
H
O
R
T
L
I
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
,
 
'
S
H
O
R
T
L
I
S
T
L
I
N
K
'
 
=
>
 
j
o
m
r
e
s
U
R
L
(
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
s
h
o
r
t
l
i
s
t
e
d
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
)
;

	
	
	
	
	
}

	
	
	
	
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
N
O
H
T
M
L
'
)
 
&
&
 
J
O
M
R
E
S
_
N
O
H
T
M
L
 
=
=
 
0
 
&
&
 
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
 
!
=
 
'
a
j
a
x
_
s
e
a
r
c
h
_
f
i
l
t
e
r
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
_
A
J
A
X
'
 
]
 
=
 
"
<
s
c
r
i
p
t
 
t
y
p
e
=
\
"
t
e
x
t
/
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
\
"
>
 
v
a
r
 
l
i
v
e
_
s
i
t
e
_
a
j
a
x
 
=
 
'
"
.
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
_
A
J
A
X
.
"
'
;
 
<
/
s
c
r
i
p
t
>
"
;

	
	
	
	
}


	
	
	
	
i
f
 
(
$
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
)
 
{

	
	
	
	
	
$
l
i
m
i
t
 
=
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
i
m
i
t
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
l
i
m
i
t
 
=
 
c
o
u
n
t
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
s
_
u
i
d
s
)
;

	
	
	
	
}


	
	
	
	
$
i
 
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
s
 
a
s
 
$
p
u
i
d
)
 
{

	
	
	
	
	
i
f
 
(
$
i
 
<
 
$
l
i
m
i
t
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
s
T
o
S
h
o
w
[
]
 
=
 
$
p
u
i
d
;

	
	
	
	
	
}

	
	
	
	
	
+
+
$
i
;

	
	
	
	
}


	
	
	
	
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
d
i
s
a
b
l
e
_
p
a
g
i
n
g
'
)
 
=
=
 
t
r
u
e
)
 
{

	
	
	
	
	
$
s
h
o
w
_
p
a
g
i
n
g
 
=
 
f
a
l
s
e
;

	
	
	
	
}


	
	
	
	
$
o
u
t
p
u
t
[
'
P
A
G
I
N
G
'
]
 
=
 
'
'
;

	
	
	
	
i
f
 
(
$
s
h
o
w
_
p
a
g
i
n
g
)
 
{

	
	
	
	
	
$
p
a
g
i
n
a
t
i
o
n
_
r
e
s
u
l
t
 
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
n
e
r
a
t
e
_
p
a
g
i
n
g
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
s
_
u
i
d
s
,
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
i
m
i
t
'
 
]
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
P
A
G
I
N
G
'
]
 
=
 
$
p
a
g
i
n
a
t
i
o
n
_
r
e
s
u
l
t
[
'
P
A
G
I
N
A
T
I
O
N
'
]
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
a
g
e
 
=
 
$
p
a
g
i
n
a
t
i
o
n
_
r
e
s
u
l
t
[
'
c
u
r
r
e
n
t
_
p
a
g
e
'
]
;

	
	
	
	
	
$
p
r
o
p
e
r
t
y
s
T
o
S
h
o
w
 
=
 
a
r
r
a
y
_
s
l
i
c
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
s
_
u
i
d
s
,
 
(
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
a
g
e
 
-
 
1
)
 
*
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
i
m
i
t
'
 
]
,
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
i
m
i
t
'
 
]
)
;

	
	
	
	
}

	
	
	
}


	
	
	
$
t
e
m
p
l
a
t
e
C
o
u
n
t
e
r
 
=
 
1
;


	
	
	
i
f
 
(
$
a
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
 
=
=
 
'
'
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
&
&
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
!
=
 
'
'
)
 
{

	
	
	
	
	
$
a
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
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
a
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

	
	
	
	
}

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
a
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
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
a
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
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;

	
	
	
}


	
	
	
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
a
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
f
e
a
t
u
r
e
d
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
f
e
a
t
u
r
e
d
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
f
e
a
t
u
r
e
d
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
)
)
 
{
 
/
/
 
o
n
l
y
 
s
t
o
r
e
 
t
h
e
 
f
e
a
t
u
r
e
d
 
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
f
 
t
h
e
i
r
 
c
o
u
n
t
 
i
s
 
>
 
0
.
 
T
h
a
t
'
s
 
b
e
c
a
u
s
e
 
f
e
a
t
u
r
e
d
 
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
 
a
r
e
 
o
n
l
y
 
s
e
t
 
i
n
 
n
o
n
-
a
j
a
x
 
c
a
l
l
s
.
 
I
f
 
i
t
'
s
 
a
n
 
a
j
a
x
 
c
a
l
l
e
d
,
 
w
e
 
d
o
n
'
t
 
w
a
n
t
 
t
o
 
s
e
t
 
t
h
e
 
f
e
a
t
u
r
e
d
 
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
 
t
o
 
n
u
l
l

	
	
	
	
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
f
e
a
t
u
r
e
d
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
d
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
f
e
a
t
u
r
e
d
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


	
	
	
$
g
u
e
s
t
_
b
u
d
g
e
t
 
=
 
'
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
u
d
g
e
t
_
f
e
a
t
u
r
e
'
]
 
=
=
 
'
1
'
 
&
&
 
u
s
i
n
g
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
(
)
)
 
{

	
	
	
	
$
g
u
e
s
t
_
b
u
d
g
e
t
 
=
 
$
b
u
d
g
e
t
-
>
g
e
t
_
b
u
d
g
e
t
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
p
r
o
p
e
r
t
y
s
T
o
S
h
o
w
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
d
e
t
a
i
l
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


	
	
	
	
/
/
s
a
v
e
 
t
h
e
 
i
n
i
t
i
a
l
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
a
n
d
 
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

	
	
	
	
$
o
r
i
g
i
n
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
y
_
u
i
d
 
=
 
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
)
;

	
	
	
	
$
o
r
i
g
i
n
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
y
_
t
y
p
e
 
=
 
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
y
p
e
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
_
m
u
l
t
i
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
s
T
o
S
h
o
w
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
y
_
l
i
s
t
_
p
r
i
c
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
y
_
l
i
s
t
_
p
r
i
c
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
y
_
l
i
s
t
_
p
r
i
c
e
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
l
o
w
e
s
t
_
p
r
i
c
e
s
_
m
u
l
t
i
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
s
T
o
S
h
o
w
,
 
$
l
o
w
e
s
t
_
e
v
e
r
 
=
 
f
a
l
s
e
,
 
$
h
i
d
e
_
r
p
n
 
=
 
t
r
u
e
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
_
m
u
l
t
i
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
s
T
o
S
h
o
w
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
_
p
a
y
m
e
n
t
_
m
e
t
h
o
d
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
y
_
p
a
y
m
e
n
t
_
m
e
t
h
o
d
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
y
_
p
a
y
m
e
n
t
_
m
e
t
h
o
d
s
-
>
g
e
t
_
g
a
t
e
w
a
y
s
_
m
u
l
t
i
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
s
T
o
S
h
o
w
)
;


	
	
	
	
/
/
 
L
a
s
t
 
b
o
o
k
e
d

	
	
	
	
$
l
a
s
t
B
o
o
k
e
d
A
r
r
a
y
 
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
 
m
a
x
(
`
t
i
m
e
s
t
a
m
p
`
)
 
A
S
 
t
s
 
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
p
r
o
p
e
r
t
y
s
T
o
S
h
o
w
)
.
'
)
 
A
N
D
 
`
t
i
m
e
s
t
a
m
p
`
 
I
S
 
N
O
T
 
N
U
L
L
 
G
R
O
U
P
 
B
Y
 
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
d
a
t
e
 
=
 
j
o
m
r
e
s
_
n
i
c
e
t
i
m
e
(
$
r
-
>
t
s
)
;

	
	
	
	
	
	
i
f
 
(
$
d
a
t
e
 
!
=
 
'
'
)
 
{

	
	
	
	
	
	
	
$
l
a
s
t
B
o
o
k
e
d
A
r
r
a
y
[
 
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
_
u
i
d
 
]
 
=
 
$
d
a
t
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
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
r
e
v
i
e
w
s
'
 
]
 
=
=
 
'
1
'
)
 
{

	
	
	
	
	
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
'
)
;

	
	
	
	
	
$
R
e
v
i
e
w
s
 
=
 
n
e
w
 
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
(
)
;

	
	
	
	
	
$
R
e
v
i
e
w
s
-
>
g
e
t
R
a
t
i
n
g
s
M
u
l
t
i
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
s
T
o
S
h
o
w
)
;

	
	
	
	
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
1
0
1
1
'
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
_
u
i
d
s
'
 
=
>
 
$
p
r
o
p
e
r
t
y
s
T
o
S
h
o
w
)
)
;
 
/
/
 
D
i
s
c
o
u
n
t
 
f
i
n
d
i
n
g
 
s
c
r
i
p
t
 
u
s
e
s
 
t
h
i
s
 
t
r
i
g
g
e
r
.
 
W
e
'
l
l
 
s
e
n
d
 
i
t
 
a
n
 
a
r
r
a
y
 
o
f
 
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
s
 
t
o
 
r
e
d
u
c
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
q
u
e
r
i
e
s
 
i
t
 
p
e
r
f
o
r
m
s
.

	
	
	
	
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
1
0
1
2
'
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
_
u
i
d
s
'
 
=
>
 
$
p
r
o
p
e
r
t
y
s
T
o
S
h
o
w
)
)
;


	
	
	
	
$
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
w
h
e
r
e
_
g
u
e
s
t
_
h
a
s
_
a
l
r
e
a
d
y
_
b
o
o
k
e
d
 
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
p
r
o
p
e
r
t
y
s
T
o
S
h
o
w
)
.
'
)
 
A
N
D
 
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
x
i
s
t
i
n
g
B
o
o
k
i
n
g
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
x
i
s
t
i
n
g
B
o
o
k
i
n
g
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
x
i
s
t
i
n
g
B
o
o
k
i
n
g
s
 
a
s
 
$
b
o
o
k
i
n
g
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
i
e
s
_
w
h
e
r
e
_
g
u
e
s
t
_
h
a
s
_
a
l
r
e
a
d
y
_
b
o
o
k
e
d
[
]
 
=
 
$
b
o
o
k
i
n
g
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
p
r
o
p
e
r
t
y
s
T
o
S
h
o
w
 
a
s
 
$
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
y
p
e
'
,
 
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
r
e
s
u
l
t
[
 
$
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
t
y
p
e
'
]
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
s
_
u
i
d
)
;


	
	
	
	
	
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
d
e
e
t
s
[
'
G
A
T
E
W
A
Y
S
'
]
 
=
 
'
'
;

	
	
	
	
	
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
s
 
=
 
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
y
_
p
a
y
m
e
n
t
_
m
e
t
h
o
d
s
-
>
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
g
a
t
e
w
a
y
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
s
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
e
m
p
t
y
(
$
p
a
y
m
e
n
t
_
m
e
t
h
o
d
s
)
)
 
{

	
	
	
	
	
	
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
y
m
e
n
t
_
m
e
t
h
o
d
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
g
a
t
e
w
a
y
s
_
s
n
i
p
p
e
t
.
h
t
m
l
'
)
;

	
	
	
	
	
	
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
d
e
e
t
s
[
'
G
A
T
E
W
A
Y
S
'
]
 
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


	
	
	
	
	
$
f
e
a
t
u
r
e
L
i
s
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
p
t
o
w
n
 
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
r
e
s
u
l
t
[
 
$
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
t
o
w
n
'
]
)
;

	
	
	
	
	
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
s
t
a
r
s
 
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
r
e
s
u
l
t
[
 
$
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
[
'
s
t
a
r
s
'
]
;

	
	
	
	
	
$
p
r
o
p
e
r
t
y
D
e
s
c
 
=
 
s
t
r
i
p
_
t
a
g
s
(
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
T
Y
P
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
,
 
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
r
e
s
u
l
t
[
 
$
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
,
 
f
a
l
s
e
)
)
)
;


	
	
	
	
	
i
f
 
(
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
,
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
f
e
a
t
u
r
e
d
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
 
]
)
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
f
e
a
t
u
r
e
d
_
l
i
s
t
i
n
g
s
_
e
m
p
h
a
s
i
s
'
 
]
)
 
|
|
 
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
f
e
a
t
u
r
e
d
_
l
i
s
t
i
n
g
s
_
e
m
p
h
a
s
i
s
'
 
]
 
=
=
 
'
'
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
f
e
a
t
u
r
e
d
_
l
i
s
t
i
n
g
s
_
e
m
p
h
a
s
i
s
'
 
]
 
=
 
'
p
a
n
e
l
-
p
r
i
m
a
r
y
'
;

	
	
	
	
	
	
}


	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
F
E
A
T
U
R
E
D
_
L
I
S
T
I
N
G
S
_
C
L
A
S
S
'
 
]
 
=
 
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
f
e
a
t
u
r
e
d
_
l
i
s
t
i
n
g
s
_
e
m
p
h
a
s
i
s
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
d
e
e
t
s
[
 
'
F
E
A
T
U
R
E
D
_
L
I
S
T
I
N
G
S
_
C
L
A
S
S
'
 
]
 
=
 
'
p
a
n
e
l
-
d
e
f
a
u
l
t
'
;

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
[
 
'
B
U
D
G
E
T
_
B
O
R
D
E
R
_
C
L
A
S
S
'
 
]
 
=
 
'
'
;


	
	
	
	
	
i
f
 
(
$
g
u
e
s
t
_
b
u
d
g
e
t
 
>
 
0
 
&
&
 
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
u
d
g
e
t
_
f
e
a
t
u
r
e
'
]
 
=
=
 
'
1
'
 
&
&
 
u
s
i
n
g
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
(
)
)
 
{

	
	
	
	
	
	
i
f
 
(

	
	
	
	
	
	
	
$
g
u
e
s
t
_
b
u
d
g
e
t
 
>
=
 
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
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
R
A
W
_
P
R
I
C
E
'
 
]
 
&
&

	
	
	
	
	
	
	
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
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
R
A
W
_
P
R
I
C
E
'
 
]
 
>
 
0

	
	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
B
U
D
G
E
T
_
B
O
R
D
E
R
_
C
L
A
S
S
'
 
]
 
=
 
'
p
a
n
e
l
-
s
u
c
c
e
s
s
'
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
d
e
e
t
s
[
 
'
B
U
D
G
E
T
_
B
O
R
D
E
R
_
C
L
A
S
S
'
 
]
 
.
=
 
'
 
p
r
o
p
e
r
t
y
-
l
i
s
t
-
o
v
e
r
b
u
d
g
e
t
-
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
;

	
	
	
	
	
	
}


	
	
	
	
	
	
/
/
 
D
o
n
'
t
 
k
n
o
w
 
i
f
 
I
 
w
a
n
t
 
t
o
 
u
s
e
 
t
h
i
s
 
y
e
t
.
 
J
o
m
r
e
s
 
8
.
1

	
	
	
	
	
	
/
*
i
f
 
(
 
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
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
R
A
W
_
P
R
I
C
E
'
 
]
 
>
 
(
$
g
u
e
s
t
_
b
u
d
g
e
t
*
3
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
d
e
e
t
s
[
 
'
B
U
D
G
E
T
_
B
O
R
D
E
R
_
C
L
A
S
S
'
 
]
 
=
 
"
p
a
n
e
l
-
d
a
n
g
e
r
 
p
r
o
p
e
r
t
y
-
l
i
s
t
-
o
v
e
r
b
u
d
g
e
t
-
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
"
;

	
	
	
	
	
	
	
}
 
*
/

	
	
	
	
	
}


	
	
	
	
	
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
r
e
v
i
e
w
s
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
R
e
v
i
e
w
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
s
_
u
i
d
;

	
	
	
	
	
	
$
i
t
e
m
R
a
t
i
n
g
 
=
 
$
R
e
v
i
e
w
s
-
>
s
h
o
w
R
a
t
i
n
g
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
s
_
u
i
d
)
;


	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
 
]
 
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
$
i
t
e
m
R
a
t
i
n
g
[
 
'
a
v
g
_
r
a
t
i
n
g
'
 
]
,
 
1
,
 
'
.
'
,
 
'
'
)
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
N
U
M
B
E
R
_
O
F
_
R
E
V
I
E
W
S
'
 
]
 
=
 
$
i
t
e
m
R
a
t
i
n
g
[
 
'
c
o
u
n
t
e
r
'
 
]
;


	
	
	
	
	
	
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
d
e
e
t
s
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
R
E
V
I
E
W
S
_
A
V
E
R
A
G
E
_
R
A
T
I
N
G
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
V
E
R
A
G
E
_
R
A
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
R
E
V
I
E
W
S
_
A
V
E
R
A
G
E
_
R
A
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
;

	
	
	
	
	
	
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
d
e
e
t
s
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
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
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
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
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
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
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
d
e
e
t
s
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
R
E
V
I
E
W
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
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
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
d
e
e
t
s
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
 
f
a
l
s
e
)
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
C
O
L
O
N
'
 
]
 
=
 
'
 
:
 
'
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
H
Y
P
H
E
N
'
 
]
 
=
 
'
 
-
 
'
;


	
	
	
	
	
	
/
/
 
P
r
o
p
e
r
t
y
 
r
e
v
i
e
w
 
i
n
f
o
r
m
a
t
i
o
n
 
n
e
e
d
s
 
t
o
 
b
e
 
i
n
 
i
t
'
s
 
o
w
n
 
a
r
r
a
y
 
s
o
 
t
h
a
t
 
a
 
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
 
c
o
n
d
i
t
i
o
n
 
c
a
n
 
b
e
 
u
s
e
d
 
t
o
 
d
e
c
i
d
e
 
i
f
 
r
e
v
i
e
w
s
 
a
r
e
 
s
h
o
w
n
 
o
r
 
n
o
.

	
	
	
	
	
	
/
/
 
T
o
 
a
l
l
o
w
 
B
C
 
w
i
t
h
 
o
l
d
e
r
 
t
e
m
p
l
a
t
e
s
 
w
e
'
l
l
 
c
o
p
y
 
t
h
e
 
r
e
v
i
e
w
 
i
n
f
o
 
f
r
o
m
 
t
h
e
 
o
l
d
 
p
r
o
p
e
r
t
y
 
d
e
e
t
s
 
a
r
r
a
y
 
t
o
 
a
 
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
_
r
e
v
i
e
w
s
 
a
r
r
a
y
.

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
N
U
M
B
E
R
_
O
F
_
R
E
V
I
E
W
S
'
 
]
 
>
 
0
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
r
e
v
i
e
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
s
[
0
]
[
 
'
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
 
]
 
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
d
e
e
t
s
[
 
'
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
[
 
'
N
U
M
B
E
R
_
O
F
_
R
E
V
I
E
W
S
'
 
]
 
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
d
e
e
t
s
[
 
'
N
U
M
B
E
R
_
O
F
_
R
E
V
I
E
W
S
'
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
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
R
E
V
I
E
W
S
_
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
 
]
 
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
d
e
e
t
s
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
R
E
V
I
E
W
S
_
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
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
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
E
S
'
 
]
 
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
d
e
e
t
s
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
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
E
S
'
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
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
R
E
V
I
E
W
S
'
 
]
 
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
d
e
e
t
s
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
R
E
V
I
E
W
S
'
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
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
 
]
 
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
d
e
e
t
s
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
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
[
 
'
C
O
L
O
N
'
 
]
 
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
d
e
e
t
s
[
 
'
C
O
L
O
N
'
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
[
 
'
H
Y
P
H
E
N
'
 
]
 
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
d
e
e
t
s
[
 
'
H
Y
P
H
E
N
'
 
]
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
[
 
'
R
E
V
I
E
W
S
_
R
A
N
D
O
M
_
I
D
E
N
T
I
F
I
E
R
'
 
]
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;

	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
[
 
'
U
I
D
'
 
]
 
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
s
_
u
i
d
;


	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
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
_
N
A
M
E
'
 
]
 
=
 
u
r
l
e
n
c
o
d
e
(
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
r
e
s
u
l
t
[
 
$
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
n
a
m
e
'
 
]
)
;


	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
[
 
'
M
O
D
A
L
_
B
U
T
T
O
N
'
 
]
 
=

	
	
	
	
	
	
	
	
m
a
k
e
_
m
o
d
a
l
_
b
u
t
t
o
n
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
r
e
v
i
e
w
s
[
0
]
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
 
]
,
 
 
/
/
 
T
e
s
t
 
o
f
 
t
h
e
 
b
u
t
t
o
n

	
	
	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
'
,
	
	
	
	
	
	
	
	
/
/
 
T
h
e
 
t
a
s
k
 
b
e
i
n
g
 
c
a
l
l
e
d

	
	
	
	
	
	
	
	
	
'
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
,
	
	
	
	
	
	
/
/
 
E
x
t
r
a
 
a
r
g
u
m
e
n
t
s
 
b
e
i
n
g
 
a
d
d
e
d
 
t
o
 
t
h
e
 
u
r
l
 
f
o
r
 
t
h
a
t
 
s
p
e
c
i
f
i
c
 
t
a
s
k

	
	
	
	
	
	
	
	
	
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
r
e
v
i
e
w
s
[
0
]
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
_
N
A
M
E
'
 
]
,
	
	
	
	
/
/
 
T
h
e
 
t
i
t
l
e
 
o
f
 
t
h
e
 
m
o
d
a
l

	
	
	
	
	
	
	
	
	
'
b
t
n
-
d
e
f
a
u
l
t
'
	
	
	
	
	
	
	
	
	
	
	
/
/
 
T
h
e
 
c
o
l
o
u
r
 
o
f
 
t
h
e
 
b
u
t
t
o
n

	
	
	
	
	
	
	
	
	
)
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
s
'
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
r
e
v
i
e
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
r
e
v
i
e
w
s
_
s
n
i
p
p
e
t
.
h
t
m
l
'
)
;

	
	
	
	
	
	
	
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
d
e
e
t
s
 
[
 
'
R
E
V
I
E
W
S
_
S
N
I
P
P
E
T
'
 
]
 
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
d
e
e
t
s
 
[
 
'
R
E
V
I
E
W
S
_
S
N
I
P
P
E
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
N
O
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
N
O
R
E
V
I
E
W
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

	
	
	
	
	
	
}

	
	
	
	
	
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
d
e
e
t
s
[
 
'
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
N
U
M
B
E
R
_
O
F
_
R
E
V
I
E
W
S
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
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
R
E
V
I
E
W
S
_
A
V
E
R
A
G
E
_
R
A
T
I
N
G
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
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
R
E
V
I
E
W
S
_
T
O
T
A
L
_
V
O
T
E
S
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
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
R
E
V
I
E
W
S
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
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
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
C
O
L
O
N
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
H
Y
P
H
E
N
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
E
V
I
E
W
S
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
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
d
e
e
t
s
 
[
 
'
R
E
V
I
E
W
S
_
S
N
I
P
P
E
T
'
 
]
 
=
 
'
'
;

	
	
	
	
	
}


	
	
	
	
	
/
/
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
d
e
e
t
s
[
'
A
V
A
I
L
A
B
I
L
I
T
Y
_
C
A
L
E
N
D
A
R
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
0
6
0
0
0
'
,
'
u
i
_
a
v
a
i
l
a
b
i
l
i
t
y
_
c
a
l
e
n
d
a
r
'
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
_
u
i
d
'
=
>
$
p
r
o
p
e
r
t
y
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
,
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
"
1
"
,
'
n
o
s
h
o
w
l
e
g
e
n
d
'
=
>
1
)
 
)
;


	
	
	
	
	
$
s
t
a
r
s
l
i
n
k
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
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
S
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
b
l
a
n
k
.
p
n
g
"
 
a
l
t
=
"
s
t
a
r
"
 
b
o
r
d
e
r
=
"
0
"
 
h
e
i
g
h
t
=
"
1
"
 
h
s
p
a
c
e
=
"
1
0
"
 
v
s
p
a
c
e
=
"
1
"
 
/
>
'
;

	
	
	
	
	
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
s
t
a
r
s
 
!
=
 
'
0
'
)
 
{

	
	
	
	
	
	
$
s
t
a
r
s
l
i
n
k
 
=
 
'
'
;

	
	
	
	
	
	
f
o
r
 
(
$
i
 
=
 
1
;
 
$
i
 
<
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
s
t
a
r
s
;
 
+
+
$
i
)
 
{

	
	
	
	
	
	
	
$
s
t
a
r
s
l
i
n
k
 
.
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
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
S
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
s
t
a
r
.
p
n
g
"
 
a
l
t
=
"
s
t
a
r
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
s
t
a
r
s
l
i
n
k
 
.
=
 
'
'
;

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
[
 
'
S
U
P
E
R
I
O
R
'
 
]
 
=
 
'
'
;

	
	
	
	
	
i
f
 
(
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
r
e
s
u
l
t
[
 
$
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
[
'
s
u
p
e
r
i
o
r
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
o
p
e
r
t
y
_
d
e
e
t
s
[
 
'
S
U
P
E
R
I
O
R
'
 
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
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
S
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
s
u
p
e
r
i
o
r
.
p
n
g
"
 
a
l
t
=
"
s
u
p
e
r
i
o
r
"
 
b
o
r
d
e
r
=
"
0
"
 
/
>
'
;

	
	
	
	
	
}


	
	
	
	
	
$
r
t
R
o
w
s
 
=
 
'
'
;

	
	
	
	
	
$
r
t
R
o
w
s
L
a
b
e
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
r
e
s
u
l
t
[
 
$
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
[
 
'
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
'
 
]
)
 
&
&
 
!
e
m
p
t
y
(
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
r
e
s
u
l
t
[
 
$
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
[
 
'
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
'
 
]
)
)
 
{

	
	
	
	
	
	
$
r
T
y
p
e
s
 
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
r
e
s
u
l
t
[
 
$
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
[
 
'
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
'
 
]
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
T
y
p
e
s
 
a
s
 
$
r
t
d
)
 
{

	
	
	
	
	
	
	
$
r
t
R
o
w
s
 
.
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
$
r
t
d
[
'
a
b
b
v
'
]
,
 
$
r
t
d
[
'
a
b
b
v
'
]
,
 
$
r
t
d
[
'
d
e
s
c
'
]
,
 
 
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
t
y
p
e
s
/
'
.
$
r
t
d
[
'
i
m
a
g
e
'
]
,
 
'
'
,
 
'
r
o
o
m
_
t
y
p
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

	
	
	
	
	
	
	
$
r
t
R
o
w
s
L
a
b
e
l
s
 
.
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
l
a
b
e
l
 
l
a
b
e
l
-
i
n
f
o
"
>
'
.
t
r
i
m
(
$
r
t
d
[
'
a
b
b
v
'
]
)
.
'
<
/
s
p
a
n
>
 
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
O
O
M
T
Y
P
E
S
'
 
]
 
=
 
$
r
t
R
o
w
s
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
O
O
M
T
Y
P
E
S
_
L
A
B
E
L
S
'
 
]
 
=
 
$
r
t
R
o
w
s
L
a
b
e
l
s
;


	
	
	
	
	
$
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
 
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
,
'
,
 
(
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
r
e
s
u
l
t
[
 
$
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
)
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
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
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
L
i
s
t
 
=
 
'
'
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
p
r
o
p
e
r
t
y
F
e
a
t
u
r
e
s
A
r
r
a
y
 
a
s
 
$
f
)
 
{

	
	
	
	
	
	
	
i
f
 
(
$
f
 
!
=
 
'
'
)
 
{

	
	
	
	
	
	
	
	
i
f
 
(
(
$
c
o
u
n
t
e
r
 
/
 
1
0
)
 
=
=
 
0
)
 
{

	
	
	
	
	
	
	
	
	
$
b
r
 
=
 
'
<
b
r
 
/
>
'
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
	
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
 
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
y
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
f
 
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
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
 
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
y
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
f
 
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
p
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
y
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
f
 
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
;

	
	
	
	
	
	
	
	
$
f
e
a
t
u
r
e
L
i
s
t
 
.
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
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
,
 
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
a
b
b
v
,
 
$
h
o
t
e
l
_
f
e
a
t
u
r
e
_
f
u
l
l
_
d
e
s
c
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

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
F
E
A
T
U
R
E
L
I
S
T
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
L
i
s
t
;

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
I
C
E
_
P
R
E
_
T
E
X
T
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
P
R
E
_
T
E
X
T
'
 
]
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
I
C
E
_
P
R
I
C
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
P
R
I
C
E
'
 
]
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
I
C
E
_
P
O
S
T
_
T
E
X
T
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
P
O
S
T
_
T
E
X
T
'
 
]
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
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
P
R
I
C
E
_
N
O
C
O
N
V
E
R
S
I
O
N
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
d
e
e
t
s
[
 
'
P
R
I
C
E
_
N
O
C
O
N
V
E
R
S
I
O
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
P
R
I
C
E
_
N
O
C
O
N
V
E
R
S
I
O
N
'
 
]
;

	
	
	
	
	
}


	
	
	
	
	
/
/
t
o
t
a
l
 
p
r
i
c
e

	
	
	
	
	
$
p
l
u
g
i
n
_
w
i
l
l
_
p
r
o
v
i
d
e
_
l
o
w
e
s
t
_
p
r
i
c
e
 
=
 
f
a
l
s
e
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
0
7
0
1
5
'
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
_
u
i
d
'
 
=
>
 
$
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
)
)
;
 
/
/
 
O
p
t
i
o
n
a
l

	
	
	
	
	
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
7
0
1
5
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
v
a
l
)
 
{

	
	
	
	
	
	
	
i
f
 
(
$
v
a
l
 
=
=
 
t
r
u
e
)
 
{

	
	
	
	
	
	
	
	
$
p
l
u
g
i
n
_
w
i
l
l
_
p
r
o
v
i
d
e
_
l
o
w
e
s
t
_
p
r
i
c
e
 
=
 
t
r
u
e
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
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
 
&
&
 
!
$
p
l
u
g
i
n
_
w
i
l
l
_
p
r
o
v
i
d
e
_
l
o
w
e
s
t
_
p
r
i
c
e
 
&
&
 
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
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
'
P
R
I
C
E
'
]
 
!
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
P
R
I
C
E
_
O
N
_
A
P
P
L
I
C
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
P
R
I
C
E
_
O
N
_
A
P
P
L
I
C
A
T
I
O
N
'
,
 
'
'
,
 
t
r
u
e
,
 
f
a
l
s
e
)
)
 
{
/
/
&
&
 
$
s
t
a
y
D
a
y
s
 
>
 
1
)

	
	
	
	
	
	
i
f
 
(
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
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
'
R
A
W
_
P
R
I
C
E
'
]
 
>
 
0
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
d
e
e
t
s
[
 
'
P
R
I
C
E
_
C
U
M
U
L
A
T
I
V
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
'
P
R
I
C
E
_
C
U
M
U
L
A
T
I
V
E
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
d
e
e
t
s
[
 
'
P
R
I
C
E
_
C
U
M
U
L
A
T
I
V
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
P
R
I
C
E
'
 
]
;

	
	
	
	
	
	
}


	
	
	
	
	
	
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
d
e
e
t
s
[
'
F
O
R
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
O
R
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
O
R
'
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
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
'
R
A
W
_
P
R
I
C
E
'
]
 
>
 
0
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
e
t
s
[
 
'
N
I
G
H
T
S
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
4
_
S
T
A
Y
D
A
Y
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
4
_
S
T
A
Y
D
A
Y
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
'
,
 
f
a
l
s
e
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
s
t
a
y
D
a
y
s
 
=
=
 
1
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
d
e
e
t
s
[
 
'
N
I
G
H
T
S
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
N
I
G
H
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
N
I
G
H
T
'
,
 
f
a
l
s
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
e
t
s
[
 
'
N
I
G
H
T
S
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
N
I
G
H
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
N
I
G
H
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
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
}


	
	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
S
T
A
Y
_
D
A
Y
S
'
 
]
 
=
 
$
s
t
a
y
D
a
y
s
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
d
e
e
t
s
[
 
'
N
I
G
H
T
S
_
T
E
X
T
'
 
]
 
=
 
'
'
;

	
	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
S
T
A
Y
_
D
A
Y
S
'
 
]
 
=
 
'
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
d
e
e
t
s
[
 
'
P
R
I
C
E
_
C
U
M
U
L
A
T
I
V
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
p
r
i
c
e
s
-
>
l
o
w
e
s
t
_
p
r
i
c
e
s
[
$
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
[
 
'
P
R
I
C
E
'
 
]
;

	
	
	
	
	
}

	
	
	
	
	
/
/
e
n
d
 
t
o
t
a
l
 
p
r
i
c
e


	
	
	
	
	
i
f
 
(
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
,
 
$
l
a
s
t
B
o
o
k
e
d
A
r
r
a
y
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
d
e
e
t
s
[
 
'
L
A
S
T
B
O
O
K
E
D
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
D
A
T
E
P
E
R
I
O
D
_
L
A
T
E
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
D
A
T
E
P
E
R
I
O
D
_
L
A
T
E
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
)
.
'
 
'
.
$
l
a
s
t
B
o
o
k
e
d
A
r
r
a
y
[
 
$
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
;

	
	
	
	
	
	
i
f
 
(
!
u
s
i
n
g
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
(
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
d
e
e
t
s
[
 
'
L
A
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
S
T
Y
L
E
'
 
]
 
=
 
'
u
i
-
s
t
a
t
e
-
h
i
g
h
l
i
g
h
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
'
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
d
e
e
t
s
[
 
'
L
A
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
S
T
Y
L
E
'
 
]
 
=
 
'
a
l
e
r
t
 
a
l
e
r
t
-
w
a
r
n
i
n
g
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
[
 
'
C
O
U
N
T
E
R
'
 
]
 
=
 
$
t
e
m
p
l
a
t
e
C
o
u
n
t
e
r
;

	
	
	
	
	
+
+
$
t
e
m
p
l
a
t
e
C
o
u
n
t
e
r
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
 
0
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
 
=
=
 
'
1
'
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
d
e
e
t
s
[
 
'
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
b
o
o
k
i
n
g
_
u
r
l
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
s
_
u
i
d
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
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
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
 
=
=
 
'
1
'
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
d
e
e
t
s
[
 
'
B
O
O
K
T
H
I
S
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
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
f
a
l
s
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
e
t
s
[
 
'
B
O
O
K
T
H
I
S
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
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
M
R
_
M
E
N
U
_
B
O
O
K
T
H
I
S
P
R
O
P
E
R
T
Y
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
	
}

	
	
	
	
	
	
	
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
 
=
=
 
'
1
'
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
d
e
e
t
s
[
 
'
B
O
O
K
T
H
I
S
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
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
'
_
B
O
O
K
I
N
G
_
C
A
L
C
Q
U
O
T
E
'
,
 
f
a
l
s
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
e
t
s
[
 
'
B
O
O
K
T
H
I
S
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
B
O
O
K
A
R
O
O
M
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
M
R
_
M
E
N
U
_
B
O
O
K
A
R
O
O
M
'
,
 
f
a
l
s
e
)
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
e
t
s
[
 
'
L
I
N
K
'
 
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
c
o
n
t
a
c
t
o
w
n
e
r
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
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
s
_
u
i
d
)
;

	
	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
B
O
O
K
T
H
I
S
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
'
,
 
f
a
l
s
e
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
e
t
s
[
 
'
L
I
N
K
'
 
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
c
o
n
t
a
c
t
o
w
n
e
r
&
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
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
s
_
u
i
d
)
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
B
O
O
K
T
H
I
S
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
_
A
G
E
N
T
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
}


	
	
	
	
	
i
f
 
(
s
t
r
l
e
n
(
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
r
e
s
u
l
t
[
 
$
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
n
a
m
e
'
 
]
)
 
>
 
2
4
 
&
&
 
$
l
a
y
o
u
t
 
=
=
 
'
t
i
l
e
'
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
d
e
e
t
s
[
 
'
P
R
O
P
_
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
s
u
b
s
t
r
(
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
r
e
s
u
l
t
[
 
$
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
n
a
m
e
'
 
]
,
 
0
,
 
2
3
)
.
'
&
h
e
l
l
i
p
;
'
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
d
e
e
t
s
[
 
'
P
R
O
P
_
N
A
M
E
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
r
e
s
u
l
t
[
 
$
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
n
a
m
e
'
 
]
;

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
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
_
N
A
M
E
_
F
U
L
L
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
r
e
s
u
l
t
[
 
$
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
n
a
m
e
'
 
]
;

	
	
	
	
	
 

	
	
	
	
	
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
d
e
e
t
s
[
 
'
L
A
T
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
r
e
s
u
l
t
[
 
$
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
[
 
'
l
a
t
'
 
]
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
L
O
N
G
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
r
e
s
u
l
t
[
 
$
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
[
 
'
l
o
n
g
'
 
]
;

	
	
	
	
	

	
	
	
	
	
/
/
 
H
i
d
i
n
g
 
p
r
o
p
e
r
t
y
 
a
d
d
r
e
s
s

	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
O
P
_
S
T
R
E
E
T
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
r
e
s
u
l
t
[
 
$
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
s
t
r
e
e
t
'
 
]
)
;

	
	
	
	
	

	
	
	
	
	
$
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
a
d
d
r
e
s
s
 
=
 
t
r
u
e
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
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
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
a
d
d
r
e
s
s
 
=
 
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
h
i
d
e
_
l
o
c
a
l
_
a
d
d
r
e
s
s
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
 
>
 
0
 
)
 
{

	
	
	
	
	
	
i
f
 
(
 
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
 
,
 
$
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
w
h
e
r
e
_
g
u
e
s
t
_
h
a
s
_
a
l
r
e
a
d
y
_
b
o
o
k
e
d
)
 
)
 
{

	
	
	
	
	
	
	
$
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
a
d
d
r
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
i
f
 
(
 
!
$
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
a
d
d
r
e
s
s
 
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
d
e
e
t
s
[
 
'
P
R
O
P
_
S
T
R
E
E
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
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
P
L
A
C
E
H
O
L
D
E
R
'
,
 
'
H
I
D
D
E
N
_
A
D
D
R
E
S
S
_
P
L
A
C
E
H
O
L
D
E
R
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
}

	
	
	
	
	
/
/
 
E
n
d
 
h
i
d
i
n
g
 
p
r
o
p
e
r
t
y
 
a
d
d
r
e
s
s

	
	
	
	
	

	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
O
P
_
T
O
W
N
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
R
L
(
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
s
e
n
d
=
S
e
a
r
c
h
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
&
t
o
w
n
=
'
.
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
r
e
s
u
l
t
[
 
$
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
t
o
w
n
'
 
]
)
)
.
'
"
>
'
.
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
r
e
s
u
l
t
[
 
$
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
t
o
w
n
'
 
]
)
.
'
<
/
a
>
'
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
O
P
_
P
O
S
T
C
O
D
E
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
r
e
s
u
l
t
[
 
$
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
p
o
s
t
c
o
d
e
'
 
]
)
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
O
P
_
R
E
G
I
O
N
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
R
L
(
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
s
e
n
d
=
S
e
a
r
c
h
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
&
r
e
g
i
o
n
=
'
.
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
r
e
s
u
l
t
[
 
$
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
r
e
g
i
o
n
_
i
d
'
 
]
)
.
'
"
>
'
.
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
r
e
s
u
l
t
[
 
$
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
r
e
g
i
o
n
'
 
]
)
.
'
<
/
a
>
'
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
P
R
O
P
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
R
L
(
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
s
e
n
d
=
S
e
a
r
c
h
&
c
a
l
l
e
d
B
y
M
o
d
u
l
e
=
m
o
d
_
j
o
m
s
e
a
r
c
h
_
m
0
&
c
o
u
n
t
r
y
=
'
.
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
r
e
s
u
l
t
[
 
$
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
c
o
u
n
t
r
y
_
c
o
d
e
'
 
]
)
)
.
'
"
>
'
.
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
r
e
s
u
l
t
[
 
$
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
c
o
u
n
t
r
y
'
 
]
)
.
'
<
/
a
>
'
;


	
	
	
	
	
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
d
e
e
t
s
[
 
'
L
I
V
E
S
I
T
E
'
 
]
 
=
 
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
l
i
v
e
_
s
i
t
e
'
)
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
U
I
D
'
 
]
 
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
s
_
u
i
d
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
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
 
t
r
u
e
)
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
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
)
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
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
L
I
N
K
_
A
J
A
X
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
,
'
a
j
a
x
'
)
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
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
L
I
N
K
_
S
E
F
S
A
F
E
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
,
'
s
e
f
s
a
f
e
'
)
;

	
	
	
	
	
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
d
e
e
t
s
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
d
e
e
t
s
[
 
'
P
R
O
P
_
N
A
M
E
'
 
]
;


	
	
	
	
	
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
d
e
e
t
s
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
'
)
;

	
	
	
	
	
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
d
e
e
t
s
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
R
O
N
T
_
R
O
O
M
T
Y
P
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
F
R
O
N
T
_
R
O
O
M
T
Y
P
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
F
R
O
N
T
_
R
O
O
M
T
Y
P
E
S
'
)
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
J
S
_
S
A
F
E
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
 
]
 
=
 
p
r
e
g
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
/
[
^
A
-
Z
a
-
z
0
-
9
_
-
]
+
/
'
,
 
'
'
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
d
e
e
t
s
[
 
'
P
R
O
P
_
N
A
M
E
'
 
]
)
;

	
	
	
	
	
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
d
e
e
t
s
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
T
O
W
N
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
$
p
t
o
w
n
)
;

	
	
	
	
	
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
d
e
e
t
s
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
R
E
G
I
O
N
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
r
e
s
u
l
t
[
 
$
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
r
e
g
i
o
n
'
 
]
)
)
;

	
	
	
	
	
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
d
e
e
t
s
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
C
O
U
N
T
R
Y
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
r
e
s
u
l
t
[
 
$
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
c
o
u
n
t
r
y
'
 
]
)
)
;


	
	
	
	
	
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
d
e
e
t
s
[
 
'
T
E
L
E
P
H
O
N
E
_
N
U
M
B
E
R
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
r
e
s
u
l
t
[
 
$
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
t
e
l
'
]
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
o
v
e
r
r
i
d
e
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
c
o
n
t
a
c
t
_
d
e
t
a
i
l
s
'
]
 
=
=
 
1
)
 
{

	
	
	
	
	
	
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
o
v
e
r
r
i
d
e
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
c
o
n
t
a
c
t
_
t
e
l
'
]
 
!
=
 
'
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
T
E
L
E
P
H
O
N
E
_
N
U
M
B
E
R
'
 
]
 
=
 
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
o
v
e
r
r
i
d
e
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
c
o
n
t
a
c
t
_
t
e
l
'
]
;

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
i
f
 
(
s
t
r
l
e
n
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
D
e
s
c
)
 
>
 
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
p
r
o
p
e
r
t
y
L
i
s
t
D
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
L
i
m
i
t
'
 
]
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
d
e
e
t
s
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
S
C
'
 
]
 
=
 
j
r
_
s
u
b
s
t
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
D
e
s
c
,
 
0
,
 
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
p
r
o
p
e
r
t
y
L
i
s
t
D
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
L
i
m
i
t
'
 
]
)
.
'
.
.
.
'
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
d
e
e
t
s
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
S
C
'
 
]
 
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
D
e
s
c
;

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
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
Q
U
I
C
K
_
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
Q
U
I
C
K
_
I
N
F
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
Q
U
I
C
K
_
I
N
F
O
'
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
g
a
l
l
e
r
y
L
i
n
k
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
d
e
e
t
s
[
 
'
R
E
M
O
T
E
_
U
R
L
'
 
]
 
=
 
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
g
a
l
l
e
r
y
L
i
n
k
'
 
]
;

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
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
d
e
e
t
s
[
 
'
E
D
I
T
_
L
I
N
K
'
 
]
 
=
 
'
'
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
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
)
 
{

	
	
	
	
	
	
i
f
 
(
 
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
 
,
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
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
 
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
d
e
e
t
s
[
 
'
E
D
I
T
_
L
I
N
K
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
R
L
(
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
d
a
s
h
b
o
a
r
d
&
t
h
i
s
P
r
o
p
e
r
t
y
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
s
_
u
i
d
)
.
'
"
 
c
l
a
s
s
=
"
o
w
n
e
r
-
l
i
n
k
s
 
b
t
n
 
b
t
n
-
d
a
n
g
e
r
"
>
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
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
H
O
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
U
S
T
O
M
C
O
D
E
_
J
O
M
R
E
S
M
A
I
N
M
E
N
U
_
R
E
C
E
P
T
I
O
N
_
H
O
M
E
'
,
f
a
l
s
e
)
.
'
<
/
a
>
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	

	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
A
N
D
O
M
_
I
D
E
N
T
I
F
I
E
R
'
 
]
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;

	
	
	
	
	
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
d
e
e
t
s
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
C
O
M
P
A
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
P
A
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
P
A
R
E
'
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
,
 
$
s
h
o
r
t
l
i
s
t
_
i
t
e
m
s
)
)
 
{

	
	
	
	
	
	
$
s
h
o
r
t
l
i
s
t
_
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
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
o
u
t
p
u
t
[
'
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
A
D
D
T
O
S
H
O
R
T
L
I
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
A
D
D
T
O
S
H
O
R
T
L
I
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
;

	
	
	
	
	
	
$
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
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
r
t
l
i
s
t
_
r
e
m
o
v
e
d
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
s
h
o
r
t
l
i
s
t
_
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
e
t
s
[
 
'
S
H
O
R
T
L
I
S
T
'
 
]
 
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
 
e
l
s
e
 
{

	
	
	
	
	
	
$
s
h
o
r
t
l
i
s
t
_
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
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
o
u
t
p
u
t
[
'
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
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
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
R
E
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
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
;

	
	
	
	
	
	
$
s
h
o
r
t
l
i
s
t
_
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
s
h
o
r
t
l
i
s
t
_
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
r
t
l
i
l
s
t
_
a
d
d
e
d
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
s
h
o
r
t
l
i
s
t
_
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
e
t
s
[
 
'
S
H
O
R
T
L
I
S
T
'
 
]
 
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


	
	
	
	
	
a
d
d
_
g
m
a
p
s
_
s
o
u
r
c
e
(
)
;
 
/
/
 
N
e
e
d
s
 
t
o
 
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
,
 
r
e
g
a
r
d
l
e
s
s
 
o
f
 
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
s
 
b
e
l
o
w
 
b
e
c
a
u
s
e
 
t
h
e
 
m
o
d
u
l
e
 
p
o
p
u
p
 
w
i
l
l
 
n
o
t
 
w
o
r
k
 
w
i
t
h
o
u
t
 
i
t
.


	
	
	
	
	
$
s
h
o
w
m
a
p
s
 
=
 
f
a
l
s
e
;

	
	
	
	
	
$
l
a
y
o
u
t
 
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
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
l
i
s
t
_
l
a
y
o
u
t
'
 
]
;

	
	
	
	
	
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
l
a
y
o
u
t
_
s
h
o
w
m
a
p
s
'
)
 
!
=
 
n
u
l
l
 
|
|
 
$
l
a
y
o
u
t
 
=
=
 
'
l
i
s
t
w
i
t
h
m
a
p
s
'
)
 
{

	
	
	
	
	
	
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
l
a
y
o
u
t
_
m
a
p
w
i
d
t
h
'
)
 
=
=
 
n
u
l
l
)
 
{

	
	
	
	
	
	
	
$
m
a
p
w
i
d
t
h
 
=
 
'
1
1
9
'
;

	
	
	
	
	
	
	
$
m
a
p
h
e
i
g
h
t
 
=
 
'
9
5
'
;

	
	
	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
	
	
$
m
a
p
w
i
d
t
h
 
=
 
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
l
a
y
o
u
t
_
m
a
p
w
i
d
t
h
'
)
;

	
	
	
	
	
	
	
$
m
a
p
h
e
i
g
h
t
 
=
 
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
l
a
y
o
u
t
_
m
a
p
h
e
i
g
h
t
'
)
;

	
	
	
	
	
	
}

	
	
	
	
	
	
$
a
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
 
=
>
 
$
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
,
 
'
w
i
d
t
h
'
 
=
>
 
$
m
a
p
w
i
d
t
h
,
 
'
h
e
i
g
h
t
'
 
=
>
 
$
m
a
p
h
e
i
g
h
t
,
 
'
d
i
s
a
b
l
e
_
u
i
'
 
=
>
 
t
r
u
e
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
1
0
5
0
'
,
 
'
x
_
g
e
o
c
o
d
e
r
'
,
 
$
a
r
g
s
)
;

	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
M
A
P
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
0
1
0
5
0
'
 
]
[
 
'
x
_
g
e
o
c
o
d
e
r
'
 
]
;

	
	
	
	
	
}


	
	
	
	
	
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
d
e
e
t
s
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
_
T
Y
P
E
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
r
e
s
u
l
t
[
 
$
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
t
y
p
e
_
t
i
t
l
e
'
]
;

	
	
	
	
	
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
d
e
e
t
s
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
_
T
Y
P
E
_
S
E
A
R
C
H
_
U
R
L
'
 
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
e
a
r
c
h
&
p
t
y
p
e
=
'
.
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
r
e
s
u
l
t
[
 
$
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
[
'
p
t
y
p
e
_
i
d
'
]
)
;


	
	
	
	
	
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
d
e
e
t
s
[
 
'
A
G
E
N
T
_
L
I
N
K
'
 
]
 
=
 
m
a
k
e
_
a
g
e
n
t
_
l
i
n
k
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
s
_
u
i
d
)
;


	
	
	
	
	
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
d
e
e
t
s
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
A
G
E
N
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
A
G
E
N
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
A
G
E
N
T
'
)
;


	
	
	
	
	
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
d
e
e
t
s
[
 
'
S
T
A
R
S
'
 
]
 
=
 
$
s
t
a
r
s
l
i
n
k
;


	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
'
 
]
 
=
 
'
'
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
_
C
L
A
S
S
'
 
]
 
=
 
'
'
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
 
0
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
 
=
=
 
'
1
'
 
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
 
=
=
 
'
0
'
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
d
e
e
t
s
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
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
B
O
O
K
I
N
G
_
O
N
R
E
Q
U
E
S
T
'
,
 
'
_
B
O
O
K
I
N
G
_
O
N
R
E
Q
U
E
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
;

	
	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
_
C
L
A
S
S
'
 
]
 
=
 
'
b
o
o
k
i
n
g
-
o
n
r
e
q
u
e
s
t
'
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
d
e
e
t
s
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
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
S
T
A
N
T
'
,
 
'
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
S
T
A
N
T
'
,
 
f
a
l
s
e
)
;

	
	
	
	
	
	
	
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
d
e
e
t
s
[
 
'
R
E
Q
U
I
R
E
_
A
P
P
R
O
V
A
L
_
C
L
A
S
S
'
 
]
 
=
 
'
b
o
o
k
i
n
g
-
i
n
s
t
a
n
t
'
;

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
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
 
i
m
a
g
e
 
o
r
 
s
l
i
d
e
s
h
o
w

	
	
	
	
	
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
d
e
e
t
s
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
_
I
M
A
G
E
_
O
R
_
S
L
I
D
E
S
H
O
W
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
0
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
p
r
o
p
e
r
t
y
_
m
a
i
n
_
i
m
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
 
=
>
 
$
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
)
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
e
t
s
[
 
'
I
M
A
G
E
L
A
R
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
l
a
r
g
e
'
]
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
I
M
A
G
E
M
E
D
I
U
M
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
m
e
d
i
u
m
'
]
;

	
	
	
	
	
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
d
e
e
t
s
[
 
'
I
M
A
G
E
T
H
U
M
B
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
1
0
1
1
'
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
_
u
i
d
'
 
=
>
 
$
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
)
)
;
 
/
/
 
O
p
t
i
o
n
a
l

	
	
	
	
	
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
1
1
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

	
	
	
	
	
	
	
i
f
 
(
!
i
s
_
n
u
l
l
(
$
v
a
l
)
)
 
{

	
	
	
	
	
	
	
	
$
r
e
s
u
l
t
 
=
 
a
r
r
a
y
_
m
e
r
g
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
d
e
e
t
s
,
 
$
v
a
l
)
;

	
	
	
	
	
	
	
	
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
d
e
e
t
s
 
=
 
$
r
e
s
u
l
t
;

	
	
	
	
	
	
	
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
1
0
1
2
'
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
_
u
i
d
'
 
=
>
 
$
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
)
)
;
 
/
/
 
O
p
t
i
o
n
a
l

	
	
	
	
	
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
1
2
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

	
	
	
	
	
	
	
i
f
 
(
!
i
s
_
n
u
l
l
(
$
v
a
l
)
)
 
{

	
	
	
	
	
	
	
	
$
r
e
s
u
l
t
 
=
 
a
r
r
a
y
_
m
e
r
g
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
d
e
e
t
s
,
 
$
v
a
l
)
;

	
	
	
	
	
	
	
	
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
d
e
e
t
s
 
=
 
$
r
e
s
u
l
t
;

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	

	
	
	
	
	
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
d
e
t
a
i
l
s
[
 
]
 
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
d
e
e
t
s
;

	
	
	
	
}

	
	
	
	



	
	
	
	
i
f
 
(
!
$
d
a
t
a
_
o
n
l
y
)
 
{

	
	
	
	
	
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
 
|
|
 
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
 
'
a
j
a
x
_
s
e
a
r
c
h
_
f
i
l
t
e
r
'
)
 
{

	
	
	
	
	
	
$
h
e
a
d
e
r
_
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
h
e
a
d
e
r
_
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
h
e
a
d
e
r
_
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
h
e
a
d
e
r
_
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
l
a
y
o
u
t
_
r
o
w
s
'
,
 
$
l
a
y
o
u
t
_
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
o
m
p
a
r
e
'
,
 
$
c
o
m
p
a
r
e
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
r
t
l
i
s
t
'
,
 
$
s
h
o
r
t
l
i
s
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
b
u
d
g
e
t
_
o
u
t
p
u
t
'
,
 
$
b
u
d
g
e
t
_
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
h
e
a
d
e
r
.
h
t
m
l
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
A
D
E
R
'
 
]
 
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
s
)
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
s
'
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
r
e
v
i
e
w
s
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
d
e
t
a
i
l
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
s
e
t
R
o
o
t
(
$
l
a
y
o
u
t
_
p
a
t
h
_
t
o
_
t
e
m
p
l
a
t
e
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
$
l
a
y
o
u
t
_
t
e
m
p
l
a
t
e
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
 
e
l
s
e
 
{

	
	
	
	
	
i
n
c
l
u
d
e
 
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
.
J
R
D
S
.
'
m
a
i
n
.
p
h
p
'
;

	
	
	
	
	
$
j
o
m
r
e
s
_
r
e
m
o
t
e
_
x
m
l
 
=
 
n
e
w
 
S
i
m
p
l
e
X
M
L
E
l
e
m
e
n
t
(
$
x
m
l
s
t
r
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
 
a
s
 
$
p
r
o
p
e
r
t
y
)
 
{

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
 
=
 
$
j
o
m
r
e
s
_
r
e
m
o
t
e
_
x
m
l
-
>
a
d
d
C
h
i
l
d
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
[
 
'
U
I
D
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
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
n
a
m
e
'
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
[
 
'
P
R
O
P
_
N
A
M
E
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
b
o
o
k
i
n
g
_
l
i
n
k
'
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
[
 
'
B
O
O
K
T
H
I
S
_
T
E
X
T
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
p
r
o
p
_
s
t
r
e
e
t
'
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
[
 
'
P
R
O
P
_
S
T
R
E
E
T
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
p
r
o
p
_
t
o
w
n
'
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
T
O
W
N
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
p
r
o
p
_
p
o
s
t
c
o
d
e
'
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
[
 
'
P
R
O
P
_
P
O
S
T
C
O
D
E
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
p
r
o
p
_
r
e
g
i
o
n
'
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
R
E
G
I
O
N
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
p
r
o
p
_
c
o
u
n
t
r
y
'
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
C
O
U
N
T
R
Y
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
m
o
r
e
i
n
f
o
r
m
a
t
i
o
n
'
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
[
 
'
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
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
i
m
a
g
e
'
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
[
 
'
I
M
A
G
E
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
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
t
y
p
e
'
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
_
T
Y
P
E
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
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
S
C
'
 
]
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
s
t
a
r
s
'
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
[
 
'
S
T
A
R
S
'
 
]
)
;


	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
l
i
v
e
s
i
t
e
'
,
 
u
r
l
e
n
c
o
d
e
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
l
i
v
e
_
s
i
t
e
'
)
)
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
l
o
w
e
s
t
p
r
i
c
e
'
,
 
u
r
l
e
n
c
o
d
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
[
 
'
L
O
W
E
S
T
P
R
I
C
E
'
 
]
)
)
;

	
	
	
	
	
	
$
x
m
l
_
p
r
o
p
e
r
t
y
-
>
a
d
d
C
h
i
l
d
(
'
m
o
r
e
i
n
f
o
r
m
a
t
i
o
n
l
i
n
k
'
,
 
u
r
l
e
n
c
o
d
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
[
 
'
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
L
I
N
K
_
S
E
F
S
A
F
E
'
 
]
)
)
;

	
	
	
	
	
}


	
	
	
	
	
$
x
m
l
S
t
r
i
n
g
 
=
 
$
j
o
m
r
e
s
_
r
e
m
o
t
e
_
x
m
l
-
>
a
s
X
M
L
(
)
;
 
/
/
 
r
e
t
u
r
n
s
 
t
h
e
 
S
i
m
p
l
e
X
M
L
 
o
b
j
e
c
t
 
a
s
 
a
 
s
e
r
i
a
l
i
z
e
d
 
X
M
L
 
s
t
r
i
n
g

	
	
	
	
	
e
c
h
o
 
$
x
m
l
S
t
r
i
n
g
;

	
	
	
	
	
e
x
i
t
;

	
	
	
	
}


	
	
	
	
/
/
s
e
t
 
b
a
c
k
 
t
h
e
 
i
n
i
t
i
a
l
 
p
r
o
p
e
r
t
y
 
t
y
p
e
 
a
n
d
 
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
o
r
i
g
i
n
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
y
_
u
i
d
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
y
p
e
'
,
 
$
o
r
i
g
i
n
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
y
_
t
y
p
e
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
N
O
R
E
S
U
L
T
S
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
F
R
O
N
T
_
N
O
R
E
S
U
L
T
S
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
t
r
u
e
,
$
i
s
l
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
N
O
R
E
S
U
L
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
N
O
R
E
S
U
L
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
P
N
_
P
R
E
V
I
O
U
S
'
,
 
'
_
P
N
_
P
R
E
V
I
O
U
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
P
N
_
N
E
X
T
'
,
 
'
_
P
N
_
N
E
X
T
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
D
A
T
E
P
E
R
I
O
D
_
S
E
C
O
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
D
A
T
E
P
E
R
I
O
D
_
S
E
C
O
N
D
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
D
A
T
E
P
E
R
I
O
D
_
M
I
N
U
T
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
D
A
T
E
P
E
R
I
O
D
_
M
I
N
U
T
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
D
A
T
E
P
E
R
I
O
D
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
D
A
T
E
P
E
R
I
O
D
_
D
A
Y
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
D
A
T
E
P
E
R
I
O
D
_
H
O
U
R
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
D
A
T
E
P
E
R
I
O
D
_
H
O
U
R
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
D
A
T
E
P
E
R
I
O
D
_
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
D
A
T
E
P
E
R
I
O
D
_
W
E
E
K
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
D
A
T
E
P
E
R
I
O
D
_
M
O
N
T
H
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
D
A
T
E
P
E
R
I
O
D
_
M
O
N
T
H
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
D
A
T
E
P
E
R
I
O
D
_
Y
E
A
R
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
D
A
T
E
P
E
R
I
O
D
_
Y
E
A
R
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
D
A
T
E
P
E
R
I
O
D
_
D
E
C
A
D
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
D
A
T
E
P
E
R
I
O
D
_
D
E
C
A
D
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
D
A
T
E
P
E
R
I
O
D
_
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
D
A
T
E
P
E
R
I
O
D
_
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
D
A
T
E
P
E
R
I
O
D
_
A
G
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
D
A
T
E
P
E
R
I
O
D
_
A
G
O
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
D
A
T
E
P
E
R
I
O
D
_
F
R
O
M
N
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
D
A
T
E
P
E
R
I
O
D
_
F
R
O
M
N
O
W
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
D
A
T
E
P
E
R
I
O
D
_
L
A
T
E
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
D
A
T
E
P
E
R
I
O
D
_
L
A
T
E
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
Q
U
I
C
K
_
I
N
F
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
Q
U
I
C
K
_
I
N
F
O
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
P
A
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
P
A
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
D
D
T
O
S
H
O
R
T
L
I
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
A
D
D
T
O
S
H
O
R
T
L
I
S
T
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
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
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
R
E
M
O
V
E
F
R
O
M
S
H
O
R
T
L
I
S
T
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
V
I
E
W
S
H
O
R
T
L
I
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
V
I
E
W
S
H
O
R
T
L
I
S
T
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
n
e
r
a
t
e
_
p
a
g
i
n
g
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
s
_
u
i
d
s
,
 
$
l
i
m
i
t
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
f
i
r
s
t
_
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
l
a
s
t
_
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
p
a
g
e
s
_
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
p
r
e
v
_
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
n
e
x
t
_
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
s
e
l
e
c
t
i
o
n
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
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
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
'
a
j
a
x
_
s
e
a
r
c
h
_
c
o
m
p
o
s
i
t
e
_
s
e
l
e
c
t
i
o
n
s
'
]
 
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

	
	
	
	
s
w
i
t
c
h
 
(
$
k
e
y
)
 
{

	
	
	
	
	
c
a
s
e
 
'
s
t
a
r
s
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
s
t
a
r
s
[
]
=
'
.
$
v
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
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
'
:

	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
f
r
o
m
=
'
.
$
v
a
l
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
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
t
o
'
:

	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
p
r
i
c
e
r
a
n
g
e
_
v
a
l
u
e
_
t
o
=
'
.
$
v
a
l
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
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
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
[
]
=
'
.
$
v
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
c
o
u
n
t
r
i
e
s
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
c
o
u
n
t
r
i
e
s
[
]
=
'
.
$
v
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
r
e
g
i
o
n
s
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
r
e
g
i
o
n
s
[
]
=
'
.
$
v
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
t
o
w
n
s
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
t
o
w
n
s
[
]
=
'
.
$
v
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
r
o
o
m
_
t
y
p
e
_
u
i
d
s
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
r
o
o
m
_
t
y
p
e
_
u
i
d
s
[
]
=
'
.
$
v
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
y
p
e
_
u
i
d
s
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
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
t
y
p
e
_
u
i
d
s
[
]
=
'
.
$
v
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
g
u
e
s
t
n
u
m
b
e
r
s
'
:

	
	
	
	
	
	
f
o
r
e
a
c
h
 
(
$
v
a
l
 
a
s
 
$
v
)
 
{

	
	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
g
u
e
s
t
n
u
m
b
e
r
s
[
]
=
'
.
$
v
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
a
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
'
:

	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
a
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
=
'
.
$
v
a
l
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
d
e
p
a
r
t
u
r
e
D
a
t
e
'
:

	
	
	
	
	
	
$
s
e
l
e
c
t
i
o
n
s
 
.
=
 
'
&
d
e
p
a
r
t
u
r
e
D
a
t
e
=
'
.
$
v
a
l
;

	
	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
	
}

	
	
	
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
-
>
j
r
_
p
a
g
e
 
=
=
 
0
)
 
{

	
	
	
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
a
g
e
 
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
c
u
r
r
e
n
t
_
p
a
g
e
 
=
 
$
t
h
i
s
-
>
j
r
_
p
a
g
e
;

	
	
}


	
	
$
t
o
t
a
l
I
t
e
m
s
 
=
 
c
o
u
n
t
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
s
_
u
i
d
s
)
;

	
	
$
u
r
l
P
a
t
t
e
r
n
 
=
 
j
o
m
r
e
s
U
R
L
(
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
e
a
r
c
h
&
j
r
_
p
a
g
e
=
(
:
n
u
m
)
'
.
$
s
e
l
e
c
t
i
o
n
s
)
;


	
	
/
/
b
u
i
l
d
 
t
h
e
 
p
a
g
i
n
a
t
i
o
n

	
	
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
o
m
r
e
s
_
p
a
g
i
n
a
t
i
o
n
'
)
;

	
	
$
p
a
g
i
n
a
t
o
r
 
=
 
n
e
w
 
j
o
m
r
e
s
_
p
a
g
i
n
a
t
i
o
n
(
$
t
o
t
a
l
I
t
e
m
s
,
 
$
l
i
m
i
t
,
 
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
a
g
e
,
 
$
u
r
l
P
a
t
t
e
r
n
)
;


	
	
/
/
p
r
e
v
i
o
u
s
 
p
a
g
e

	
	
i
f
 
(
$
p
a
g
i
n
a
t
o
r
-
>
g
e
t
P
r
e
v
U
r
l
(
)
)
 
{

	
	
	
$
p
r
e
v
_
o
u
t
p
u
t
[
]
[
'
P
R
E
V
_
U
R
L
'
]
 
=
 
$
p
a
g
i
n
a
t
o
r
-
>
g
e
t
P
r
e
v
U
r
l
(
)
;

	
	
	
$
f
i
r
s
t
_
o
u
t
p
u
t
[
]
[
'
F
I
R
S
T
_
U
R
L
'
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
e
a
r
c
h
'
.
$
s
e
l
e
c
t
i
o
n
s
)
;

	
	
}


	
	
/
/
n
e
x
t
 
p
a
g
e

	
	
i
f
 
(
$
p
a
g
i
n
a
t
o
r
-
>
g
e
t
N
e
x
t
U
r
l
(
)
)
 
{

	
	
	
$
n
e
x
t
_
o
u
t
p
u
t
[
]
[
'
N
E
X
T
_
U
R
L
'
]
 
=
 
$
p
a
g
i
n
a
t
o
r
-
>
g
e
t
N
e
x
t
U
r
l
(
)
;

	
	
	
$
l
a
s
t
_
o
u
t
p
u
t
[
]
[
'
L
A
S
T
_
U
R
L
'
]
 
=
 
j
o
m
r
e
s
U
R
L
(
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
e
a
r
c
h
&
j
r
_
p
a
g
e
=
'
.
c
e
i
l
(
$
t
o
t
a
l
I
t
e
m
s
 
/
 
$
l
i
m
i
t
)
.
$
s
e
l
e
c
t
i
o
n
s
)
;

	
	
}


	
	
/
/
p
a
g
e
s

	
	
f
o
r
e
a
c
h
 
(
$
p
a
g
i
n
a
t
o
r
-
>
g
e
t
P
a
g
e
s
(
)
 
a
s
 
$
p
a
g
e
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

	
	
	
i
f
 
(
$
p
a
g
e
[
'
u
r
l
'
]
)
 
{

	
	
	
	
i
f
 
(
$
p
a
g
e
[
'
i
s
C
u
r
r
e
n
t
'
]
)
 
{

	
	
	
	
	
$
r
[
'
P
A
G
E
_
C
L
A
S
S
'
]
 
=
 
'
a
c
t
i
v
e
'
;

	
	
	
	
}

	
	
	
	
$
r
[
'
P
A
G
E
_
U
R
L
'
]
 
=
 
$
p
a
g
e
[
'
u
r
l
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
r
[
'
P
A
G
E
_
C
L
A
S
S
'
]
 
=
 
'
d
i
s
a
b
l
e
d
'
;

	
	
	
	
$
r
[
'
P
A
G
E
_
U
R
L
'
]
 
=
 
'
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
:
v
o
i
d
(
)
;
'
;

	
	
	
}


	
	
	
$
r
[
'
P
A
G
E
_
N
U
M
B
E
R
'
]
 
=
 
$
p
a
g
e
[
'
n
u
m
'
]
;

	
	
	
$
p
a
g
e
s
_
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
r
;

	
	
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
f
i
r
s
t
_
o
u
t
p
u
t
'
,
 
$
f
i
r
s
t
_
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
l
a
s
t
_
o
u
t
p
u
t
'
,
 
$
l
a
s
t
_
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
p
r
e
v
_
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
r
e
v
_
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
n
e
x
t
_
o
u
t
p
u
t
'
,
 
$
n
e
x
t
_
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
p
a
g
e
s
_
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
s
_
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
p
a
g
i
n
a
t
i
o
n
.
h
t
m
l
'
)
;

	
	
$
p
a
g
i
n
a
t
i
o
n
 
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
'
P
A
G
I
N
A
T
I
O
N
'
 
=
>
 
$
p
a
g
i
n
a
t
i
o
n
,
 
'
c
u
r
r
e
n
t
_
p
a
g
e
'
 
=
>
 
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
a
g
e
)
;

	
}


/
*
*

 
*
 
M
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
 
m
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
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
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
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

	
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

