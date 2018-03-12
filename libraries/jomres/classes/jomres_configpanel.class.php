
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
c
o
n
t
e
n
t
_
t
a
b
s
'
)
;


/
*
*

 
*
 
C
r
e
a
t
e
s
 
t
h
e
 
J
o
m
r
e
s
 
c
o
n
f
i
g
 
p
a
n
e
l
 
o
b
j
e
c
t
.

 
#

 
*

 
*
 
@
s
i
n
c
e
 
2
.
6

 
*
/

c
l
a
s
s
 
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
p
a
n
e
l
 
e
x
t
e
n
d
s
 
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
e
n
t
_
t
a
b
s

{

 
 
 
 
/
*
*

 
 
 
 
 
*
 
I
n
s
e
r
t
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
s
 
i
n
t
o
 
t
h
e
 
p
a
n
e
s
 
a
r
r
a
y
.

 
 
 
 
 
*
/

 
 
 
 
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

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
o
w
c
l
a
s
s
 
=
 
'
'
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
o
w
c
l
a
s
s
 
=
 
'
o
d
d
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
o
w
c
l
a
s
s
 
=
 
'
e
v
e
n
'
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
a
n
e
s
[
 
]
 
=
 
'

	
	
	
<
t
r
 
c
l
a
s
s
=
"
'
 
.
$
r
o
w
c
l
a
s
s
.
'
"
>

	
	
	
	
<
t
d
 
w
i
d
t
h
=
"
3
0
%
"
>
'
 
.
$
t
h
i
s
-
>
l
e
f
t
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
t
h
i
s
-
>
m
i
d
d
l
e
.
'
<
/
t
d
>

	
	
	
	
<
t
d
>
'
 
.
$
t
h
i
s
-
>
r
i
g
h
t
.
'
<
/
t
d
>

	
	
	
<
/
t
r
>

	
	
	
'
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
t
h
i
s
-
>
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
o
w
c
l
a
s
s
 
=
 
'
r
o
w
-
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
o
w
c
l
a
s
s
 
=
 
'
r
o
w
-
o
d
d
'
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
a
n
e
s
[
 
]
 
=
 
'

	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
r
o
w
-
f
l
u
i
d
 
'
 
.
$
r
o
w
c
l
a
s
s
.
'
"
>

	
	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
s
p
a
n
3
"
>
'
 
.
$
t
h
i
s
-
>
l
e
f
t
.
'
<
/
d
i
v
>

	
	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
s
p
a
n
4
"
>
'
 
.
$
t
h
i
s
-
>
m
i
d
d
l
e
.
'
<
/
d
i
v
>

	
	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
s
p
a
n
5
"
>
'
 
.
$
t
h
i
s
-
>
r
i
g
h
t
.
'
<
/
d
i
v
>

	
	
	
<
/
d
i
v
>

	
	
	
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
l
e
f
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
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
m
i
d
d
l
e
 
=
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
i
g
h
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
;

 
 
 
 
 
 
 
 
+
+
$
t
h
i
s
-
>
c
o
u
n
t
e
r
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
 
i
n
s
e
r
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
(
$
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
 
=
 
'
'
,
 
$
c
l
a
s
s
 
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
i
n
f
o
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
p
a
n
e
s
[
 
]
 
=
 
'
<
p
 
c
l
a
s
s
=
"
'
.
$
c
l
a
s
s
.
'
"
>
'
.
$
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
.
'
<
/
p
>
'
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
$
t
e
x
t
 
=
 
'
'
,
 
$
t
y
p
e
 
=
 
'
h
3
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
p
a
n
e
s
[
 
]
 
=
 
'
<
d
i
v
 
c
l
a
s
s
=
"
r
o
w
-
f
l
u
i
d
"
>
<
d
i
v
 
c
l
a
s
s
=
"
s
p
a
n
1
2
"
>
<
'
.
$
t
y
p
e
.
'
>
'
.
$
t
e
x
t
.
'
<
/
'
.
$
t
y
p
e
.
'
>
<
/
d
i
v
>
<
/
d
i
v
>
'
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
s
e
t
l
e
f
t
 
p
a
n
e
l
.

 
 
 
 
 
*
/

 
 
 
 
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
 
s
e
t
l
e
f
t
(
$
v
a
l
 
=
 
'
&
n
b
s
p
;
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
l
e
f
t
 
=
 
$
v
a
l
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
s
e
t
m
i
d
d
l
e
 
p
a
n
e
l
.

 
 
 
 
 
*
/

 
 
 
 
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
v
a
l
 
=
 
'
&
n
b
s
p
;
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
m
i
d
d
l
e
 
=
 
$
v
a
l
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
s
e
t
r
i
g
h
t
 
p
a
n
e
l
.

 
 
 
 
 
*
/

 
 
 
 
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
v
a
l
 
=
 
'
&
n
b
s
p
;
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
r
i
g
h
t
 
=
 
$
v
a
l
;

 
 
 
 
}

}

