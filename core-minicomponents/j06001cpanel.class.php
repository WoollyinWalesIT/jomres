
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
c
p
a
n
e
l

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
c
p
a
n
e
l
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
)
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
1
C
P
A
N
E
L
'
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
j
o
m
r
e
s
_
w
i
d
g
e
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
j
o
m
r
e
s
_
w
i
d
g
e
t
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
w
i
d
g
e
t
s
-
>
g
e
t
_
w
i
d
g
e
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
_
u
i
d
)
;


	
	
/
/
w
i
d
g
e
t
s
 
j
s

	
	
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
o
m
r
e
s
-
w
i
d
g
e
t
s
.
j
s
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
g
r
i
d
_
l
a
y
o
u
t
 
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
 
'
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
f
r
o
n
t
_
c
p
a
n
e
l
_
h
o
m
e
_
g
r
i
d
'
]
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
g
r
i
d
_
l
a
y
o
u
t
 
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
n
u
m
b
e
r
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
)
;

	
	
	
$
g
r
i
d
_
l
a
y
o
u
t
[
$
k
]
 
=
 
(
i
n
t
)
$
n
u
m
b
e
r
s
[
0
]
 
/
 
(
i
n
t
)
$
n
u
m
b
e
r
s
[
1
]
;

	
	
}


	
	
$
n
u
m
b
e
r
_
o
f
_
c
o
l
u
m
n
s
 
=
 
c
o
u
n
t
(
$
g
r
i
d
_
l
a
y
o
u
t
)
;

	
	

	
	
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
i
s
_
w
i
d
g
e
t
'
 
=
>
 
t
r
u
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
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
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
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
t
h
i
s
_
p
a
g
e
_
w
i
d
g
e
t
s
 
a
s
 
$
w
i
d
g
e
t
 
=
>
 
$
w
 
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
w
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
 
&
&
 
$
w
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
 
<
=
 
$
n
u
m
b
e
r
_
o
f
_
c
o
l
u
m
n
s
)
 
{

	
	
	
	
	
$
c
 
=
 
(
i
n
t
)
$
w
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

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
$
c
 
=
 
1
;

	
	
	
	
}

	
	
	
	

	
	
	
	
$
w
i
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

	
	
	
	

	
	
	
	
$
w
i
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
'
J
R
_
W
I
D
G
E
T
_
T
A
S
K
'
]
 
=
 
$
w
i
d
g
e
t
;


	
	
	
	
/
/
$
w
i
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
'
W
I
D
G
E
T
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
'
]
 
=
 
'
{
j
o
m
r
e
s
_
s
h
o
r
t
c
o
d
e
 
'
.
$
w
i
d
g
e
t
.
'
}
'
;

	
	
	
	
$
w
i
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
'
W
I
D
G
E
T
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
$
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
w
i
d
g
e
t
s
[
$
w
i
d
g
e
t
]
[
'
e
v
e
n
t
P
o
i
n
t
'
]
,
 
$
w
i
d
g
e
t
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

	
	
	
	

	
	
	
	
$
w
i
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
'
W
I
D
G
E
T
_
T
I
T
L
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
w
i
d
g
e
t
s
-
>
w
i
d
g
e
t
s
[
$
w
i
d
g
e
t
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
;

	
	
	
	

	
	
	
	
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
w
i
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
B
A
C
K
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
w
i
d
g
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
{
'
o
u
t
p
u
t
'
.
$
c
}
[
'
W
I
D
G
E
T
S
'
]
)
)
 
{

	
	
	
	
	
$
{
'
o
u
t
p
u
t
'
.
$
c
}
[
'
W
I
D
G
E
T
S
'
]
 
.
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
{
'
o
u
t
p
u
t
'
.
$
c
}
[
'
W
I
D
G
E
T
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
{
'
o
u
t
p
u
t
'
.
$
c
}
[
'
C
O
L
U
M
N
_
S
I
Z
E
'
]
 
=
 
1
2
 
*
 
$
g
r
i
d
_
l
a
y
o
u
t
[
$
c
-
1
]
;
 
/
/
a
r
r
a
y
 
k
e
y
s
 
i
n
 
$
g
r
i
d
_
l
a
y
o
u
t
 
s
t
a
r
t
 
f
r
o
m
 
0
,
 
c
o
l
u
m
n
 
i
d
s
 
s
t
a
r
t
 
f
r
o
m
 
1

	
	
	
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
B
A
C
K
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
n
u
m
b
e
r
_
o
f
_
c
o
l
u
m
n
s
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
!
i
s
s
e
t
(
$
{
'
o
u
t
p
u
t
'
.
$
i
}
)
)
 
{

	
	
	
	
$
{
'
o
u
t
p
u
t
'
.
$
i
}
[
'
W
I
D
G
E
T
S
'
]
 
=
 
'
'
;

	
	
	
	
$
{
'
o
u
t
p
u
t
'
.
$
i
}
[
'
C
O
L
U
M
N
_
S
I
Z
E
'
]
 
=
 
1
2
 
*
 
$
g
r
i
d
_
l
a
y
o
u
t
[
$
i
-
1
]
;
 
/
/
a
r
r
a
y
 
k
e
y
s
 
i
n
 
$
g
r
i
d
_
l
a
y
o
u
t
 
s
t
a
r
t
 
f
r
o
m
 
0
,
 
c
o
l
u
m
n
 
i
d
s
 
s
t
a
r
t
 
f
r
o
m
 
1

	
	
	
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
c
o
l
u
m
n
s
'
.
$
i
,
 
a
r
r
a
y
(
$
{
'
o
u
t
p
u
t
'
.
$
i
}
)
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
c
p
a
n
e
l
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

