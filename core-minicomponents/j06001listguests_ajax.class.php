
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
1
l
i
s
t
g
u
e
s
t
s
_
a
j
a
x

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

 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
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
n
a
m
e
_
m
u
l
t
i
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
;


 
 
 
 
 
 
 
 
$
h
i
s
t
o
r
i
c
 
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
G
E
T
,
 
'
h
i
s
t
o
r
i
c
'
,
 
'
2
'
)
;

 
 
 
 
 
 
 
 
$
s
h
o
w
_
a
l
l
 
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
G
E
T
,
 
'
s
h
o
w
_
a
l
l
'
,
 
'
0
'
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


 
 
 
 
 
 
 
 
/
/
s
e
t
 
t
h
e
 
t
a
b
l
e
 
c
o
u
l
m
n
s
,
 
i
n
 
t
h
e
 
e
x
a
c
t
 
o
r
c
e
r
 
i
n
 
w
h
i
c
h
 
t
h
e
y
`
r
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
t
a
b
l
e

 
 
 
 
 
 
 
 
$
a
C
o
l
u
m
n
s
 
=
 
a
r
r
a
y
(
'
a
.
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
'
,
 
'
a
.
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
'
,
 
'
a
.
f
i
r
s
t
n
a
m
e
'
,
 
'
a
.
s
u
r
n
a
m
e
'
,
 
'
a
.
h
o
u
s
e
'
,
 
'
a
.
s
t
r
e
e
t
'
,
 
'
a
.
t
o
w
n
'
,
 
'
a
.
c
o
u
n
t
y
'
,
 
'
a
.
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
 
'
a
.
c
o
u
n
t
r
y
'
,
 
'
a
.
t
e
l
_
l
a
n
d
l
i
n
e
'
,
 
'
a
.
t
e
l
_
m
o
b
i
l
e
'
,
 
'
a
.
e
m
a
i
l
'
,
 
'
a
.
v
a
t
_
n
u
m
b
e
r
'
,
 
'
a
.
d
i
s
c
o
u
n
t
'
,
 
'
a
.
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


 
 
 
 
 
 
 
 
/
/
s
e
t
 
c
o
l
u
m
n
s
 
c
o
u
n
t

	
	
$
n
 
=
 
c
o
u
n
t
(
$
a
C
o
l
u
m
n
s
)
;


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
P
a
g
i
n
g

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
s
L
i
m
i
t
 
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
_
G
E
T
[
'
s
t
a
r
t
'
]
)
 
&
&
 
$
_
G
E
T
[
'
s
t
a
r
t
'
]
 
!
=
 
'
-
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
L
i
m
i
t
 
=
 
'
L
I
M
I
T
 
'
.
(
i
n
t
)
$
_
G
E
T
[
'
s
t
a
r
t
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
_
G
E
T
[
'
l
e
n
g
t
h
'
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
O
r
d
e
r
i
n
g

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
s
O
r
d
e
r
 
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
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
O
r
d
e
r
 
=
 
'
O
R
D
E
R
 
B
Y
 
'
;

	
	
	
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
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
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
[
$
i
]
[
'
c
o
l
u
m
n
'
]
)
)
 
{

	
	
	
	
	
$
c
o
l
u
m
n
_
i
d
 
=
 
(
i
n
t
)
$
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
[
$
i
]
[
'
c
o
l
u
m
n
'
]
;

	
	
	
	
	
$
s
O
r
d
e
r
 
.
=
 
'
'
.
$
a
C
o
l
u
m
n
s
[
$
c
o
l
u
m
n
_
i
d
]
.
'
 
'
.
(
$
_
G
E
T
[
'
j
r
_
o
r
d
e
r
'
]
[
$
i
]
[
'
d
i
r
'
]
 
=
=
=
 
'
a
s
c
'
 
?
 
'
A
S
C
'
 
:
 
'
D
E
S
C
'
)
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
s
O
r
d
e
r
 
=
=
 
'
O
R
D
E
R
 
B
Y
 
'
)
 
{

	
	
	
	
$
s
O
r
d
e
r
 
=
 
'
'
;

	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
$
s
O
r
d
e
r
 
=
 
r
t
r
i
m
(
$
s
O
r
d
e
r
,
 
'
,
 
'
)
;

	
	
	
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
F
i
l
t
e
r
i
n
g

 
 
 
 
 
 
 
 
 
*
 
N
O
T
E
 
t
h
i
s
 
d
o
e
s
 
n
o
t
 
m
a
t
c
h
 
t
h
e
 
b
u
i
l
t
-
i
n
 
D
a
t
a
T
a
b
l
e
s
 
f
i
l
t
e
r
i
n
g
 
w
h
i
c
h
 
d
o
e
s
 
i
t

 
 
 
 
 
 
 
 
 
*
 
w
o
r
d
 
b
y
 
w
o
r
d
 
o
n
 
a
n
y
 
f
i
e
l
d
.
 
I
t
'
s
 
p
o
s
s
i
b
l
e
 
t
o
 
d
o
 
h
e
r
e
,
 
b
u
t
 
c
o
n
c
e
r
n
e
d
 
a
b
o
u
t
 
e
f
f
i
c
i
e
n
c
y

 
 
 
 
 
 
 
 
 
*
 
o
n
 
v
e
r
y
 
l
a
r
g
e
 
t
a
b
l
e
s
,
 
a
n
d
 
M
y
S
Q
L
'
s
 
r
e
g
e
x
 
f
u
n
c
t
i
o
n
a
l
i
t
y
 
i
s
 
v
e
r
y
 
l
i
m
i
t
e
d

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
=
 
'
'
;

	
	
$
s
e
a
r
c
h
 
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
G
E
T
,
 
'
j
r
_
s
e
a
r
c
h
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
s
e
a
r
c
h
[
'
v
a
l
u
e
'
]
)
 
&
&
 
$
s
e
a
r
c
h
[
'
v
a
l
u
e
'
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
=
 
'
A
N
D
 
(
'
;

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
 
(
$
i
 
=
 
0
;
 
$
i
 
<
 
$
n
;
 
+
+
$
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
.
=
 
'
'
.
$
a
C
o
l
u
m
n
s
[
$
i
]
.
"
 
L
I
K
E
 
'
%
"
.
$
s
e
a
r
c
h
[
'
v
a
l
u
e
'
]
.
"
%
'
 
O
R
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
$
s
W
h
e
r
e
 
=
 
r
t
r
i
m
(
$
s
W
h
e
r
e
,
 
'
 
O
R
 
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
W
h
e
r
e
 
.
=
 
'
)
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
P
r
e
f
i
l
t
e
r

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
i
f
 
(
$
s
h
o
w
_
a
l
l
 
=
=
 
1
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
 
a
.
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
.
'
)
 
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
=
 
"
W
H
E
R
E
 
a
.
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
"
.
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
.
"
'
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
h
i
s
t
o
r
i
c
 
=
=
 
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
 
.
=
 
"
A
N
D
 
(
 
b
.
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
 
'
0
'
 
A
N
D
 
b
.
b
o
o
k
e
d
o
u
t
 
=
 
'
0
'
 
)
 
"
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
$
h
i
s
t
o
r
i
c
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
u
s
e
 
.
=
 
"
A
N
D
 
(
 
b
.
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
 
'
1
'
 
O
R
 
b
.
b
o
o
k
e
d
o
u
t
 
=
 
'
1
'
 
)
 
"
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
B
u
i
l
d
 
a
n
d
 
e
x
e
c
u
t
e
 
t
h
e
 
q
u
e
r
y

 
 
 
 
 
 
 
 
 
*
/


 
 
 
 
 
 
 
 
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
T
 
S
Q
L
_
B
I
G
_
S
E
L
E
C
T
S
=
1
'
;

 
 
 
 
 
 
 
 
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
 
S
Q
L
_
C
A
L
C
_
F
O
U
N
D
_
R
O
W
S
 

	
	
	
	
	
	
a
.
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
,
 

	
	
	
	
	
	
a
.
f
i
r
s
t
n
a
m
e
,
 

	
	
	
	
	
	
a
.
s
u
r
n
a
m
e
,
 

	
	
	
	
	
	
a
.
h
o
u
s
e
,
 

	
	
	
	
	
	
a
.
s
t
r
e
e
t
,
 

	
	
	
	
	
	
a
.
t
o
w
n
,
 

	
	
	
	
	
	
a
.
c
o
u
n
t
y
,
 

	
	
	
	
	
	
a
.
c
o
u
n
t
r
y
,
 

	
	
	
	
	
	
a
.
p
o
s
t
c
o
d
e
,
 

	
	
	
	
	
	
a
.
t
e
l
_
l
a
n
d
l
i
n
e
,
 

	
	
	
	
	
	
a
.
t
e
l
_
m
o
b
i
l
e
,
 

	
	
	
	
	
	
a
.
e
m
a
i
l
,
 

	
	
	
	
	
	
a
.
v
a
t
_
n
u
m
b
e
r
,
 

	
	
	
	
	
	
a
.
d
i
s
c
o
u
n
t
,

	
	
	
	
	
	
a
.
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
 
a
 

	
	
	
	
	
	
L
E
F
T
 
J
O
I
N
 
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
 
b
 
O
N
 
a
.
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
 
=
 
b
.
g
u
e
s
t
_
u
i
d
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
$
c
l
a
u
s
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'
.
$
s
W
h
e
r
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
G
R
O
U
P
 
B
Y
 
a
.
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
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
$
s
O
r
d
e
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
.
'
 
'
.
$
s
L
i
m
i
t
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
G
u
e
s
t
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


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
T
o
t
a
l
 
n
u
m
b
e
r
 
o
f
 
r
o
w
s

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
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
 
F
O
U
N
D
_
R
O
W
S
(
)
'
;

 
 
 
 
 
 
 
 
$
m
p
 
=
 
(
i
n
t
)
 
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
$
m
p
 
=
=
 
0
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
d
r
a
w
'
 
=
>
 
(
i
n
t
)
$
_
G
E
T
[
'
d
r
a
w
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
T
o
t
a
l
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
F
i
l
t
e
r
e
d
'
 
=
>
 
0
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
=
>
 
a
r
r
a
y
(
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
$
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
S
t
a
r
t
 
b
u
i
l
d
i
n
g
 
t
h
e
 
o
u
t
p
u
t
 
a
r
r
a
y
.
 
T
h
e
 
c
o
l
u
m
n
s
 
d
a
t
a
 
s
h
o
u
l
d
 
b
e
 
b
u
i
l
t
 
i
n
 
t
h
e
 
e
x
a
c
t
 
o
r
d
e
r
 
i
n
 
w
h
i
c
h
 
t
h
e
y
`
l
l
 
b
e
 
d
i
s
p
l
a
y
e
d
 
i
n
 
t
h
e
 
t
a
b
l
e
.

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
'
d
r
a
w
'
 
=
>
 
(
i
n
t
)
$
_
G
E
T
[
'
d
r
a
w
'
]
,

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
T
o
t
a
l
'
 
=
>
 
$
m
p
,

 
 
 
 
 
 
 
 
 
 
 
 
'
r
e
c
o
r
d
s
F
i
l
t
e
r
e
d
'
 
=
>
 
$
m
p
,

 
 
 
 
 
 
 
 
 
 
 
 
'
d
a
t
a
'
 
=
>
 
a
r
r
a
y
(
)
,

 
 
 
 
 
 
 
 
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
j
o
m
r
e
s
G
u
e
s
t
s
L
i
s
t
 
a
s
 
$
g
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
a
l
l
 
=
=
 
1
 
&
&
 
(
(
i
n
t
)
 
$
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
 
!
=
 
(
i
n
t
)
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
j
r
t
b
a
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
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
'
,
 
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
_
i
n
v
o
i
c
e
s
&
g
u
e
s
t
_
i
d
=
'
.
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
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
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
R
_
S
H
O
W
I
N
V
O
I
C
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
)
;

	
	
	
	
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
'
,
 
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
_
b
o
o
k
i
n
g
s
&
g
u
e
s
t
_
u
i
d
=
'
.
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
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
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
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
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
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
e
d
i
t
'
,
 
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
e
d
i
t
_
g
u
e
s
t
&
i
d
=
'
.
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
.
$
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
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
C
O
M
M
O
N
_
E
D
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
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
d
e
l
e
t
e
'
,
 
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
e
l
e
t
e
_
g
u
e
s
t
&
i
d
=
'
.
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
.
$
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
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
C
O
M
M
O
N
_
D
E
L
E
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
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
o
o
l
b
a
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
I
t
e
m
T
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
o
l
b
a
r
-
>
n
e
w
T
o
o
l
b
a
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
o
l
b
a
r
-
>
a
d
d
I
t
e
m
(
'
f
a
 
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
,
 
'
b
t
n
 
b
t
n
-
i
n
f
o
'
,
 
'
'
,
 
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
e
d
i
t
_
g
u
e
s
t
&
i
d
=
'
.
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
.
$
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
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
C
O
M
M
O
N
_
E
D
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
t
o
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
'
f
a
 
f
a
-
f
i
l
e
-
t
e
x
t
'
,
 
'
'
,
 
'
'
,
 
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
_
i
n
v
o
i
c
e
s
&
g
u
e
s
t
_
i
d
=
'
.
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
M
A
N
A
G
E
R
_
S
H
O
W
I
N
V
O
I
C
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
R
_
S
H
O
W
I
N
V
O
I
C
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
)
;

	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
'
f
a
 
f
a
-
l
i
s
t
'
,
 
'
'
,
 
'
'
,
 
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
_
b
o
o
k
i
n
g
s
&
g
u
e
s
t
_
u
i
d
=
'
.
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
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
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
R
P
O
R
T
A
L
_
C
P
A
N
E
L
_
L
I
S
T
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
t
o
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
'
f
a
 
f
a
-
t
r
a
s
h
-
o
'
,
 
'
'
,
 
'
'
,
 
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
e
l
e
t
e
_
g
u
e
s
t
&
i
d
=
'
.
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
.
$
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
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
C
O
M
M
O
N
_
D
E
L
E
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
t
o
o
l
b
a
r
-
>
g
e
t
T
o
o
l
b
a
r
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
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

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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
g
-
>
f
i
r
s
t
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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
g
-
>
s
u
r
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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
g
-
>
h
o
u
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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
g
-
>
s
t
r
e
e
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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
g
-
>
t
o
w
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
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
f
i
n
d
_
r
e
g
i
o
n
_
n
a
m
e
(
$
g
-
>
c
o
u
n
t
y
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
g
-
>
p
o
s
t
c
o
d
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
g
-
>
c
o
u
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
g
-
>
t
e
l
_
l
a
n
d
l
i
n
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
g
-
>
t
e
l
_
m
o
b
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
g
-
>
e
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
g
-
>
v
a
t
_
n
u
m
b
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
$
g
-
>
d
i
s
c
o
u
n
t
.
'
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
]
 
=
 
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
s
[
$
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
]
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
d
a
t
a
'
]
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
*

 
 
 
 
 
 
 
 
 
*
 
R
e
t
u
r
n
 
t
h
e
 
j
s
o
n
 
e
n
c
o
d
e
d
 
d
a
t
a
 
t
o
 
p
o
p
u
l
a
t
e
 
t
h
e
 
t
a
b
l
e
 
r
o
w
s

 
 
 
 
 
 
 
 
 
*
/

 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
$
o
u
t
p
u
t
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

